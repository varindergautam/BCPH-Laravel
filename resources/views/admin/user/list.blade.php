@extends('layouts.admin_layout')

@section('title', 'User List')

@section('content')

<div class="content-header">
</div>

<section class="content ">

	<div class="container-fluid">

		<div class="row">

            @include('validation_message.validation_message')

			<div class="col-sm-12">

				<div class="card bg-white user-detail-wrap">

					<div class="card-header  bg-white">

						<h4 class=""> List <span class="float-end"></span></h4>

					</div>

					<div class="card-body account-setting-wrap">

						<div class="col-12">

                            <div class="row">

                                <div class="table-responsive listing-table">

                                    <table class="table table-bordered table-striped w-100" id="size_table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone No.</th>
                                                <th>Category</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead> 
                                    </table>

                                </div>

                            </div>

                        </div>

				    </div>

			    </div>

		    </div>

	    </div>


    </div>

</section>

@stop

@section('scripts')

    <script>

        jQuery(document).ready(function () {

            jQuery('#size_table').DataTable({
                
                "responsive": true,
                "processing": true,
                "serverSide": true,  
                "ajax": {
                   "url": "{{ route('admin.user.userAjax') }}", 
                },
                "columns":[
                    { "data": "sr_no" },
                    { "data": "applicant_name" },
                    { "data": "email" },
                    { "data": "mobile_number" },
                    { "data": "category" },
                    { "data": "action" },                    
                ],
                "columnDefs":
                [
                    
                    {
                        "targets": 5,
                        render: function (data, type, row, meta) {
                            
                            console.log(row.edit);

                            var status = row['status'] == 1 ? "checked" : "";

                            html = `<ul class="p-0">`+
                                        `<li class="list-inline-item">`+

                                            `<a href="`+row.viewForm+`"`+

                                            `class="info-btn">`+

                                            `<i class="fab fa-wpforms"></i>`+

                                            `</a>`+

                                        `</li>`+

                                        `<li class="list-inline-item">`+

                                            `<a href="`+row.show+`"`+

                                            `class="info-btn">`+

                                            `<i class="fa fa-eye"></i>`+

                                            `</a>`+

                                        `</li>`
                                        
                                        // +


                                        // `<li class="list-inline-item">

                                        // <div style="position: relative;" data-table=""

                                        // data-id="`+row.id+`"

                                        // data-status=" `+row.status+`"

                                        // class="switch update_status "

                                        // data-url="`+row.update+`"

                                        // data-title="Are you sure to change status?" data-icon=""

                                        // data-success="Category status successfully updated!"

                                        // data-cancel="Category status did not changed!" title="Update">

                                        // <label>

                                        // <input class="status" id="togle-`+row.id+`" `+status+` type="checkbox">

                                        // <span class="lever slider round"></span>

                                        // </label>

                                        // </div>

                                        // </li>`
                                        ;


                            return html + `</ul>`;
                        }
                    }                
                ],
                // "dom": 'lBfrtip',
                // "buttons": [        
                //     {
                //         extend: 'csv',
                //         exportOptions: {
                //             columns: [ 1, 2, 3]
                //         },
                //     },

                //     {
                //         extend: 'pdf',
                //         exportOptions: {
                //             columns: [ 1, 2, 3],
                //             alignment: 'center',
                //         },
                //     },

                //     {
                //         extend: 'print',
                //         exportOptions: {
                //             columns: [ 1, 2, 3]
                //         }
                //     },       
                // ],
                "lengthMenu": [
                  [10, 25, 50, 100, -1],
                  [10, 25, 50, 100, "All"]
                ],
                "sPaginationType" : "full_numbers",                
            });

        });

    </script>

@endsection
