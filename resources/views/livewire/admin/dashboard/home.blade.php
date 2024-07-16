<div>
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6 order-1">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-between">
                                    <div class="avatar flex-shrink-0">
                                        <img
                                            src="{{asset('waitlist/admin/img/icons/unicons/chart-success.png')}}"
                                            alt="chart success"
                                            class="rounded" />
                                    </div>
                                </div>
                                <span class="fw-medium d-block mb-1">Total Users</span>
                                <h3 class="card-title mb-2">{{$users->count()}}</h3>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="card">
            <h5 class="card-header">Users</h5>
            <div class="card-body">
                <div class="table-responsive text-nowrap">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Country</th>
                            <th>Date Joined</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($members as $index=>$member)
                            <tr>
                                <td>{{$members->firstItem()+$index}}</td>
                                <td>
                                    <span class="fw-medium">{{$member->name}}</span>
                                </td>
                                <td>{{$member->email}}</td>
                                <td>{{$member->country}}</td>
                                <td>{{$member->created_at->format('d/m/Y h:i:s a')}}</td>
                                <td>
                                    @empty($member->email_verified_at)
                                        <span class="badge bg-label-warning me-1">Not Verified</span>
                                    @else
                                        <span class="badge bg-label-primary me-1">Verified</span>
                                    @endempty
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="mt-3 mb-3">
                    {{$members->links()}}
                </div>
            </div>
        </div>
    </div>

</div>
