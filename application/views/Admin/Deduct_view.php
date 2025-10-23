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

/* Dark theme styles */
body.dark-theme table.dataTable thead tr>.dtfc-fixed-right {
    background-color: #25304a;
    color: #fff;
}

body.dark-theme table.dataTable tbody tr>.dtfc-fixed-left,
body.dark-theme table.dataTable tbody tr>.dtfc-fixed-right {
    background-color: #25304a;
    color: #fff;
}

body.dark-theme table.dataTable {
    background-color: #222;
}

body.dark-theme table.dataTable thead {
    background-color: #25304a;
    color: #fff;
}

body.dark-theme table.dataTable tbody tr {
    background-color: #25304a;
    color: #fff;
}
</style>



<div class="body-wrapper">
    <div class="container-fluid">
        <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
            <div class="card-body px-4 py-3">
                <div class="row align-items-center">
                    <div class="col-9">
                        <h4 class="fw-semibold mb-8">Users </h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a class="text-muted text-decoration-none" href="<?= base_url('profile')?>">Home
                                    </a>
                                </li>
                                <li class="breadcrumb-item" aria-current="page">Users Deduction</li>
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
                    <div class="row">
						<form id="inputForm" class="row gx-3 align-items-center" method="POST" action="#">
							<div class="col-auto">
								<label for="ded_date" class="col-form-label">Deduction Date:</label>
							</div>
							<div class="col-auto">
								<input type="date" id="ded_date" name="ded_date" class="form-control">
							</div>
							
							<div class="col-auto">
								<label for="emp_id" class="col-form-label">Employee:</label>
							</div>
							<div class="col-md-4">
								<input type="search" id="emp_id" name="emp_id" class="form-control" placeholder="Search Employee">
							</div>

							<div class="col-auto">
								<button type="submit" class="btn btn-primary" id="viewButton">
									<i class="fa fa-eye"></i> View
								</button>
							</div>
						</form>
                    </div>
                    
                    <br>
                    
					<div class="table-responsive">
                        <table id="deduct" class="table w-100 table-striped table-bordered display text-nowrap">

                            <thead>
                                <th class="wd-lg-30p"><span>Deduction Type</span></th>
                                <th class="wd-lg-8p"><span>Debit</span></th>
                                <th class="wd-lg-10p"><span>Credit</span></th>
                                <th class="wd-lg-40p"><span>Balance</span></th>
                                
                            </thead>
                            <tbody>

                            </tbody>

							<tfoot>
								<tr>
									<td colspan="3" style="text-align:right"><strong>Total:</strong></td>
									<td style="text-align: center; font-weight: bold;" id="totalBalance"> </td>
								</tr>
							</tfoot>

                        </table>
                    </div>
                </div>
            </div>



        </div>
    </div>
</div>
</div>

</script>
<script src="<?= base_url() ?>assets/js/jquery/jquery.min.js"></script>
<script src="<?= base_url() ?>assets/libs/jquery-ui/dist/jquery-ui.min.js"></script>

<script>
    $(document).ready(function () {
        // Initialize autocomplete for employee ID input
        $("input[name='emp_id']").autocomplete({
            source: function (request, response) {
                $.get("<?= site_url('employee/search_incharge'); ?>", {
                    query: request.term
                }, function (data) {
                    try {
                        const parsedData = JSON.parse(data);
                        response(parsedData);
                    } catch (error) {
                        console.error("Error parsing JSON:", error);
                        response([]);
                    }
                }).fail(function (xhr, status, error) {
                    console.error("AJAX request failed:", error);
                    response([]);
                });
            },
            select: function (event, ui) {
                $(this).val(`${ui.item.emp_id} - ${ui.item.name}`);
                $(this).data('id', ui.item.emp_id);
                return false;
            }
        }).autocomplete("instance")._renderItem = function (ul, item) {
            return $("<li>")
                //.append(`<div>${item.emp_id} - ${item.name}</div>`)
                

				.append(
					$("<div data-effect='effect-scale'>").css("font-family", "Inter-Regular, sans-serif").html(`${item.emp_id} - ${item.name}</div>`)
            	)
				.appendTo(ul);
        };

        // Initialize DataTable
        const table = $('#deduct').DataTable({
            serverSide: true,
            scrollCollapse: true,
            scrollY: '50vh',
            lengthMenu: [[10, 25, 50, 100, 10000], [10, 25, 50, 100, "Max"]],
            pageLength: 10,
            ajax: {
                url: "<?= base_url('Admin/view_deduction_date'); ?>",
                type: "POST",
                data: function (d) {
                    d.ded_date = $('#ded_date').val();
                    d.emp_id = $('#emp_id').data('id');
                }
            },
            columns: [
                { data: "ldg_type" },
                { data: "ldg_debit" },
                {
                    render: function (data, type, row) {
                        return row.ldg_credit === null ? '0.00' : row.ldg_credit;
                    }
                },
                { data: "ldg_bal" }
            ],
            columnDefs: [
                { targets: "_all", className: "text-center" }
            ]
        });

        // Function to update total balance
        function updateTotalBalance() {
            $.ajax({
                url: "<?= base_url('Admin/sum_ldg_balance'); ?>",
                type: "POST",
                data: {
                    ded_date: $('#ded_date').val(),
                    emp_id: $('#emp_id').data('id')
                },
                dataType: "json",
                success: function (data) {
                    if (data && data.total_balance !== undefined) {
                        const totalBalance = data.total_balance !== null ? parseFloat(data.total_balance).toFixed(2) : '0.00';
                        $('#totalBalance').text(totalBalance);
                    } else {
                        console.error("Unexpected response format:", data);
                        $('#totalBalance').text('Error');
                    }
                },
                error: function (xhr, status, error) {
                    console.error("Error fetching total balance:", error);
                    $('#totalBalance').text('Error');
                }
            });
        }

        // Update total balance on page load
        updateTotalBalance();

        // Update total balance when the table is reloaded
        table.on('draw', function () {
            updateTotalBalance();
        });

        // Handle view button click
        $('#viewButton').click(function (event) {
            event.preventDefault();

            const ded_date = $('#ded_date').val();
            const emp_id = $('#emp_id').data('id');

            if (!emp_id && !ded_date) {
                Swal.fire({
                    title: 'Input Error',
                    text: 'Please select a deduction date to view.',
                    icon: 'warning',
                    confirmButtonText: 'OK'
                });
                return;
            }

            table.ajax.reload(function (json) {
                if (json.data.length === 0) {
                    Swal.fire({
                        title: 'No Records Found',
                        text: 'No records found.',
                        icon: 'info',
                        confirmButtonText: 'OK'
                    });
                } 
				// else {
                //     Swal.fire({
                //         title: 'Data Found',
                //         text: 'Records found for the selected sales date and officer in charge.',
                //         icon: 'info',
                //         confirmButtonText: 'OK'
                //     });
                // }
            });
        });
    });
</script>
