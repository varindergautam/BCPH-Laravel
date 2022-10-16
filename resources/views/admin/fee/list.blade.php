@extends('layouts.admin_layout')

@section('title', 'Fee List')

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

						<h4 class=""> List <span class="float-end"><a href="{{ route('admin.fee.create') }}" class="btn btn-primary">Add</a></span></h4>

					</div>

					<div class="card-body account-setting-wrap">

						<div class="col-12">

                            <div class="row">

                                <div class="table-responsive listing-table">

                                    <table class="table table-bordered table-striped w-100" id="size_table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Category</th>
                                                <th>Basic Fees</th>
                                                <th>Bar Council Fees</th>
                                                <th>Building Fees</th>
                                                <th>Advocate Welfare Fees</th>
                                                <th>Benevolent Fees</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>                                    
                                        <tbody>
                                            @forelse ($fees as $key => $fee)
                                                <tr>
                                                    <td>{{ $key+1 }}</td>
                                                    <td>{{ $fee->category }}</td>
                                                    <td>{{ $fee->basic_fees }}</td>
                                                    <td>{{ $fee->bar_council_fees }}</td>
                                                    <td>{{ $fee->building_fees }}</td>
                                                    <td>{{ $fee->advocate_welfare_fees }}</td>
                                                    <td>{{ $fee->benevolent_fees }}</td>
                                                    <td><a href="{{ route('admin.fee.edit', $fee->id) }}"><i class="fa fa-edit"></i></a></td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="6" class="text-center">No Data Found</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
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

            // $('#size_table').DataTable({

            //     responsive: true,

            // });

            var month = {{ isset($month) && !empty($month) ? $month : '123' }};

            var year = {{ isset($year) && !empty($year) ? $year : '123' }};

            var date = {{ isset($date) && !empty($date) ? $date : '123' }};

            if(month != 123)
            {
                var data = {"month": month};
            }

            if(year != 123)
            {
                var data = {"year": year};
            }

            if(date != 123)
            {
                var data = {"date": date.replace (/`/g, '')};
            }

        

            jQuery('#size_table').DataTable({
                
                "responsive": true,
                "processing": true,
                "serverSide": true,  
                "ajax": {
                   "url": "",  
                   "data": data
                },
                "columns":[
                    { "data":"checkbox", orderable:false, searchable:false},
                    { "data": "sr_no" },
                    { "data": "name" },
                    { "data": "description" },
                    { "data": "action" },                    
                ],

                "columnDefs":
                [
                    {
                        "targets": 4,
                        render: function (data, type, row, meta) {

                            var status = row['status'] == 1 ? "checked" : "";

                            html = `<ul class="p-0">`+
                                        `<li class="list-inline-item">`+

                                            `<a href="`+row.edit+`"`+

                                            `class="info-btn">`+

                                            `<i class="fa fa-edit"></i>`+

                                            `</a>`+

                                        `</li>`+


                                        `<li class="list-inline-item">`+

                                            `<a href="`+row.show+`"`+

                                            `class="info-btn">`+

                                            `<i class="fa fa-eye"></i>`+

                                            `</a>`+

                                        `</li>`+                                        

                                        `<li class="list-inline-item">

                                            <a class="delete-data info-btn" href="javascript:void(0);"

                                               data-url="`+row.delete+`"

                                               data-title="Are you sure?"

                                               data-body="Once category is delete, all medicine and subcategory will be deleted related to this category!"

                                               data-icon="" data-success="Category successfully deleted!"

                                               data-cancel="Category is safe!"

                                               title="Delete"><i class="fa fa-trash"></i>

                                            </a>

                                        </li>`+

                                        `<li class="list-inline-item">

                                            <div style="position: relative;" data-table=""

                                            data-id="`+row.id+`"

                                            data-status=" `+row.status+`"

                                            class="switch update_status "

                                            data-url="`+row.update+`"

                                            data-title="Are you sure to change status?" data-icon=""

                                            data-success="Category status successfully updated!"

                                            data-cancel="Category status did not changed!" title="Update">

                                            <label>

                                            <input class="status" id="togle-`+row.id+`" `+status+` type="checkbox">

                                            <span class="lever slider round"></span>

                                            </label>

                                            </div>

                                        </li>`;


                            return html + `</ul>`;
                        }
                    }                
                ],
                "dom": 'lBfrtip',
                "buttons": [        
                    {
                        extend: 'csv',
                        exportOptions: {
                            columns: [ 1, 2, 3]
                        },
                    },

                    {
                        extend: 'pdf',
                        exportOptions: {
                            columns: [ 1, 2, 3],
                            alignment: 'center',
                        },
                    },

                    {
                        extend: 'print',
                        exportOptions: {
                            columns: [ 1, 2, 3]
                        }
                    },       
                ],
                "lengthMenu": [
                  [10, 25, 50, 100, -1],
                  [10, 25, 50, 100, "All"]
                ],
                "sPaginationType" : "full_numbers",                
            });

        });

    </script>

@endsection
