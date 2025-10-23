<style>
.breadcrumb-item+.breadcrumb-item::before {
    float: left;
    padding-right: var(--bs-breadcrumb-item-padding-x);
    color: var(--bs-breadcrumb-divider-color);
    content: var(--bs-breadcrumb-divider, "•");
}


.accordion-body {
    /* padding: var(--bs-accordion-body-padding-y) var(--bs-accordion-body-padding-x); */
}

.select2-container--default .select2-selection--single .select2-selection__arrow b {
    border-color: #888 transparent transparent transparent;
    border-style: none;
    border-width: 5px 4px 0 4px;
    height: 0;
    left: 50%;
    margin-left: -4px;
    margin-top: -2px;
    position: absolute;
    top: 50%;
    width: 0;
}

.border-top {
    border-top: 2px;
     !important;
}

.form-check-input[type="checkbox"] {
    border-radius: 0.25em;
    border-color: #5a6a85;
}
</style>

<style>
/* Default fixed columns styling */

i.fas.fa-sun {
    color: yellow;
}

table.dataTable tbody tr>.dtfc-fixed-left,
table.dataTable tbody tr>.dtfc-fixed-right {
    z-index: 1;
    /* background-color: #ffffff; */
    color: #000;
}

/* Light theme styles (default) */
table.dataTable {
    background-color: #ffffff;
}

table.dataTable thead {
    background-color: #f1f1f1;
    color: #000;
}

table.dataTable tbody tr {
    background-color: #ffffff;
    color: #000;
}
</style>


<div class="body-wrapper">
    <div class="container-fluid">
        <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
            <div class="card-body px-4 py-3">
                <div class="row align-items-center">
                    <div class="col-9">
                        <h4 class="fw-semibold mb-8">Request Logs </h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a class="text-muted text-decoration-none" href="<?= base_url('profile')?>">Home
                                    </a>
                                </li>
                                <li class="breadcrumb-item" aria-current="page">Request Logs </li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-3">
                        <div class="text-center mb-n5">
                            <img src="<?=base_url()?>assets/images/breadcrumb/ChatBc.png" alt="modernize-img"
                                class="img-fluid mb-n4" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="datatables">
            <div class="card border-top border-primary">
                <div class="card-body">


                    <div class="table-responsive">
                        <table id="dt-logs2" class="table w-100 table-striped table-bordered display text-nowrap">

                            <thead>
                                <th class="wd-lg-30p"><span>Date/Time</span></th>

                                <th class="wd-lg-40p"><span>Action Taken</span></th>

                            </thead>
                            <tbody>

                            </tbody>

                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>

    </script>
    <script src="<?=base_url()?>assets/js/jquery/jquery.min.js"></script>
    <script src="<?=base_url()?>assets/libs/jquery-ui/dist/jquery-ui.min.js"></script>

    <script>
    $(document).ready(function() {
        //var table = $('table#dt-execute').removeAttr('width').DataTable({
        // var table = $("table#dt-logs2").DataTable({
        //     "destroy": true,
        //     'serverSide': true,
        //     'processing': true,

        //     "ajax": {
        //         url: "<?php echo site_url('admin/logs_list'); ?>",
        //         type: "POST",
        // 		"data": function (d)
        // 		{
        // 			d.start        = d.start || 0; // Start index of the records
        // 			d.length       = d.length || 10; // Number of records per page
        // 		}
        //     },
        // 	// language: {
        // 	// 	processing: "<img src='<?=base_url()?>assets/loader2.gif' width='200' height='200'>"
        // 	// },

        //     // buttons: [
        //     //     'copy', 'csv', 'print'
        //     // ],
        //     "order": [ [ 0, 'desc' ]],

        //     "columnDefs": [{
        //         "targets": [1],
        //         "orderable": false,   
        // 		},


        //     ]
        // });

        var item_tables = $('#dt-logs2').DataTable({
            "processing": true,
            "serverSide": true,
            "searching": true,
            "ajax": {
                "url": "<?php echo base_url(); ?>admin/logs_list",
                "type": "POST",
                "data": function(d) {
                    d.start = d.start || 0; // Start index of the records
                    d.length = d.length || 10; // Number of records per page
                }
            },

            columns: [{
                    data: 'date'
                },
                {
                    data: 'action'
                }
            ],
            "order": [
                [0, 'desc']
            ],

            "columnDefs": [{
                    "targets": [1],
                    "orderable": false,
                },


            ],

            "paging": true,
            "pagingType": "full_numbers",
            "lengthMenu": [
                [10, 25, 50, 1000],
                [10, 25, 50, "Max"]
            ],
            "pageLength": 10,
        });
    });
    </script>
