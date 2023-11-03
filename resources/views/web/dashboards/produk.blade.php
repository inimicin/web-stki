@extends('layouts.dashboard-app')

@section('content')
    <div class="pagetitle">
        <h1>Produk</h1>
        <nav>
            <ol class="breadcrumb">

                <li class="breadcrumb-item active">Produk</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body p-3 overflow-auto">

                        <!-- Table with stripped rows -->
                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Position</th>
                                    <th scope="col">Age</th>
                                    <th scope="col">Start Date</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Brandon Jacob</td>
                                    <td>Designer</td>
                                    <td>28</td>
                                    <td>2016-05-25</td>
                                    <td class="d-flex align-items-center justify-content-start gap-2">
                                        <a href="" class="btn btn-sm btn-warning">
                                            <i class="iconify" data-icon="carbon:edit"></i>
                                        </a>
                                        <a href="" class="btn btn-sm btn-danger">
                                            <i class="iconify" data-icon="ic:outline-delete"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Bridie Kessler</td>
                                    <td>Developer</td>
                                    <td>35</td>
                                    <td>2014-12-05</td>
                                    <td class="d-flex align-items-center justify-content-start gap-2">
                                        <a href="" class="btn btn-sm btn-warning">
                                            <i class="iconify" data-icon="carbon:edit"></i>
                                        </a>
                                        <a href="" class="btn btn-sm btn-danger">
                                            <i class="iconify" data-icon="ic:outline-delete"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Ashleigh Langosh</td>
                                    <td>Finance</td>
                                    <td>45</td>
                                    <td>2011-08-12</td>
                                    <td class="d-flex align-items-center justify-content-start gap-2">
                                        <a href="" class="btn btn-sm btn-warning">
                                            <i class="iconify" data-icon="carbon:edit"></i>
                                        </a>
                                        <a href="" class="btn btn-sm btn-danger">
                                            <i class="iconify" data-icon="ic:outline-delete"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Angus Grady</td>
                                    <td>HR</td>
                                    <td>34</td>
                                    <td>2012-06-11</td>
                                    <td class="d-flex align-items-center justify-content-start gap-2">
                                        <a href="" class="btn btn-sm btn-warning">
                                            <i class="iconify" data-icon="carbon:edit"></i>
                                        </a>
                                        <a href="" class="btn btn-sm btn-danger">
                                            <i class="iconify" data-icon="ic:outline-delete"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Raheem Lehner</td>
                                    <td>Dynamic Division Officer</td>
                                    <td>47</td>
                                    <td>2011-04-19</td>
                                    <td class="d-flex align-items-center justify-content-start gap-2">
                                        <a href="" class="btn btn-sm btn-warning">
                                            <i class="iconify" data-icon="carbon:edit"></i>
                                        </a>
                                        <a href="" class="btn btn-sm btn-danger">
                                            <i class="iconify" data-icon="ic:outline-delete"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
