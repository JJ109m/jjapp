@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 ">
                <div class="card">
                    <div class="card-body">

                        <div class="container-fluid">
                            <div
                                class=" checkout wizard1 wizard7 global-shadow px-sm-50 px-20 py-sm-50 py-30 mb-30 bg-white radius-xl w-100">
                                <div class="row justify-content-center">
                                    <div class="col-xl-8">
                                        <div class="checkout-progress-indicator content-center">
                                            <div class="checkout-progress">
                                                <div class="step current" id="1">
                                                    <span>1</span>
                                                    <span>Start</span>
                                                </div>
                                                <div class="current"><svg xmlns="http://www.w3.org/2000/svg" width="182"
                                                        height="6" viewBox="0 0 182 6" class="svg replaced-svg">
                                                        <g id="Group_1318" data-name="Group 1318"
                                                            transform="translate(-441 -521)">
                                                            <circle id="Ellipse_95" data-name="Ellipse 95" cx="3"
                                                                cy="3" r="3" transform="translate(441 521)"
                                                                fill="#c5cae1" opacity="0.15"></circle>
                                                            <circle id="Ellipse_95-2" data-name="Ellipse 95" cx="3"
                                                                cy="3" r="3" transform="translate(457 521)"
                                                                fill="#c5cae1" opacity="0.2"></circle>
                                                            <circle id="Ellipse_95-3" data-name="Ellipse 95" cx="3"
                                                                cy="3" r="3" transform="translate(473 521)"
                                                                fill="#c5cae1" opacity="0.3"></circle>
                                                            <circle id="Ellipse_95-4" data-name="Ellipse 95" cx="3"
                                                                cy="3" r="3" transform="translate(489 521)"
                                                                fill="#c5cae1" opacity="0.35"></circle>
                                                            <circle id="Ellipse_95-5" data-name="Ellipse 95" cx="3"
                                                                cy="3" r="3" transform="translate(505 521)"
                                                                fill="#c5cae1" opacity="0.4"></circle>
                                                            <circle id="Ellipse_95-6" data-name="Ellipse 95" cx="3"
                                                                cy="3" r="3" transform="translate(521 521)"
                                                                fill="#c5cae1" opacity="0.5"></circle>
                                                            <circle id="Ellipse_95-7" data-name="Ellipse 95" cx="3"
                                                                cy="3" r="3" transform="translate(537 521)"
                                                                fill="#c5cae1" opacity="0.55"></circle>
                                                            <circle id="Ellipse_95-8" data-name="Ellipse 95" cx="3"
                                                                cy="3" r="3" transform="translate(553 521)"
                                                                fill="#c5cae1" opacity="0.6"></circle>
                                                            <circle id="Ellipse_95-9" data-name="Ellipse 95" cx="3"
                                                                cy="3" r="3" transform="translate(569 521)"
                                                                fill="#c5cae1" opacity="0.65"></circle>
                                                            <circle id="Ellipse_95-10" data-name="Ellipse 95" cx="3"
                                                                cy="3" r="3" transform="translate(585 521)"
                                                                fill="#c5cae1" opacity="0.7"></circle>
                                                            <circle id="Ellipse_95-11" data-name="Ellipse 95" cx="3"
                                                                cy="3" r="3" transform="translate(601 521)"
                                                                fill="#c5cae1" opacity="0.8"></circle>
                                                            <circle id="Ellipse_95-12" data-name="Ellipse 95"
                                                                cx="3" cy="3" r="3"
                                                                transform="translate(617 521)" fill="#c5cae1"
                                                                opacity="0.9"></circle>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <div class="step" id="2">
                                                    <span>2</span>
                                                    <span>Profile</span>
                                                </div>
                                                <div class="current"><svg xmlns="http://www.w3.org/2000/svg"
                                                        width="182" height="6" viewBox="0 0 182 6"
                                                        class="svg replaced-svg">
                                                        <g id="Group_1318" data-name="Group 1318"
                                                            transform="translate(-441 -521)">
                                                            <circle id="Ellipse_95" data-name="Ellipse 95" cx="3"
                                                                cy="3" r="3" transform="translate(441 521)"
                                                                fill="#c5cae1" opacity="0.15"></circle>
                                                            <circle id="Ellipse_95-2" data-name="Ellipse 95"
                                                                cx="3" cy="3" r="3"
                                                                transform="translate(457 521)" fill="#c5cae1"
                                                                opacity="0.2"></circle>
                                                            <circle id="Ellipse_95-3" data-name="Ellipse 95"
                                                                cx="3" cy="3" r="3"
                                                                transform="translate(473 521)" fill="#c5cae1"
                                                                opacity="0.3"></circle>
                                                            <circle id="Ellipse_95-4" data-name="Ellipse 95"
                                                                cx="3" cy="3" r="3"
                                                                transform="translate(489 521)" fill="#c5cae1"
                                                                opacity="0.35"></circle>
                                                            <circle id="Ellipse_95-5" data-name="Ellipse 95"
                                                                cx="3" cy="3" r="3"
                                                                transform="translate(505 521)" fill="#c5cae1"
                                                                opacity="0.4"></circle>
                                                            <circle id="Ellipse_95-6" data-name="Ellipse 95"
                                                                cx="3" cy="3" r="3"
                                                                transform="translate(521 521)" fill="#c5cae1"
                                                                opacity="0.5"></circle>
                                                            <circle id="Ellipse_95-7" data-name="Ellipse 95"
                                                                cx="3" cy="3" r="3"
                                                                transform="translate(537 521)" fill="#c5cae1"
                                                                opacity="0.55"></circle>
                                                            <circle id="Ellipse_95-8" data-name="Ellipse 95"
                                                                cx="3" cy="3" r="3"
                                                                transform="translate(553 521)" fill="#c5cae1"
                                                                opacity="0.6"></circle>
                                                            <circle id="Ellipse_95-9" data-name="Ellipse 95"
                                                                cx="3" cy="3" r="3"
                                                                transform="translate(569 521)" fill="#c5cae1"
                                                                opacity="0.65"></circle>
                                                            <circle id="Ellipse_95-10" data-name="Ellipse 95"
                                                                cx="3" cy="3" r="3"
                                                                transform="translate(585 521)" fill="#c5cae1"
                                                                opacity="0.7"></circle>
                                                            <circle id="Ellipse_95-11" data-name="Ellipse 95"
                                                                cx="3" cy="3" r="3"
                                                                transform="translate(601 521)" fill="#c5cae1"
                                                                opacity="0.8"></circle>
                                                            <circle id="Ellipse_95-12" data-name="Ellipse 95"
                                                                cx="3" cy="3" r="3"
                                                                transform="translate(617 521)" fill="#c5cae1"
                                                                opacity="0.9"></circle>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <div class="step" id="3">
                                                    <span>3</span>
                                                    <span>Hints</span>
                                                </div>
                                                <div class="current"><svg xmlns="http://www.w3.org/2000/svg"
                                                        width="182" height="6" viewBox="0 0 182 6"
                                                        class="svg replaced-svg">
                                                        <g id="Group_1318" data-name="Group 1318"
                                                            transform="translate(-441 -521)">
                                                            <circle id="Ellipse_95" data-name="Ellipse 95" cx="3"
                                                                cy="3" r="3" transform="translate(441 521)"
                                                                fill="#c5cae1" opacity="0.15"></circle>
                                                            <circle id="Ellipse_95-2" data-name="Ellipse 95"
                                                                cx="3" cy="3" r="3"
                                                                transform="translate(457 521)" fill="#c5cae1"
                                                                opacity="0.2"></circle>
                                                            <circle id="Ellipse_95-3" data-name="Ellipse 95"
                                                                cx="3" cy="3" r="3"
                                                                transform="translate(473 521)" fill="#c5cae1"
                                                                opacity="0.3"></circle>
                                                            <circle id="Ellipse_95-4" data-name="Ellipse 95"
                                                                cx="3" cy="3" r="3"
                                                                transform="translate(489 521)" fill="#c5cae1"
                                                                opacity="0.35"></circle>
                                                            <circle id="Ellipse_95-5" data-name="Ellipse 95"
                                                                cx="3" cy="3" r="3"
                                                                transform="translate(505 521)" fill="#c5cae1"
                                                                opacity="0.4"></circle>
                                                            <circle id="Ellipse_95-6" data-name="Ellipse 95"
                                                                cx="3" cy="3" r="3"
                                                                transform="translate(521 521)" fill="#c5cae1"
                                                                opacity="0.5"></circle>
                                                            <circle id="Ellipse_95-7" data-name="Ellipse 95"
                                                                cx="3" cy="3" r="3"
                                                                transform="translate(537 521)" fill="#c5cae1"
                                                                opacity="0.55"></circle>
                                                            <circle id="Ellipse_95-8" data-name="Ellipse 95"
                                                                cx="3" cy="3" r="3"
                                                                transform="translate(553 521)" fill="#c5cae1"
                                                                opacity="0.6"></circle>
                                                            <circle id="Ellipse_95-9" data-name="Ellipse 95"
                                                                cx="3" cy="3" r="3"
                                                                transform="translate(569 521)" fill="#c5cae1"
                                                                opacity="0.65"></circle>
                                                            <circle id="Ellipse_95-10" data-name="Ellipse 95"
                                                                cx="3" cy="3" r="3"
                                                                transform="translate(585 521)" fill="#c5cae1"
                                                                opacity="0.7"></circle>
                                                            <circle id="Ellipse_95-11" data-name="Ellipse 95"
                                                                cx="3" cy="3" r="3"
                                                                transform="translate(601 521)" fill="#c5cae1"
                                                                opacity="0.8"></circle>
                                                            <circle id="Ellipse_95-12" data-name="Ellipse 95"
                                                                cx="3" cy="3" r="3"
                                                                transform="translate(617 521)" fill="#c5cae1"
                                                                opacity="0.9"></circle>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <div class="step" id="4">
                                                    <span>4</span>
                                                    <span>Finished</span>
                                                </div>
                                            </div>
                                        </div><!-- checkout -->
                                        <div class="row justify-content-center">
                                            <div class="col-xl-7 col-lg-8 col-sm-10">
                                                <div class="card checkout-shipping-form px-30 pt-2 pb-30 border-color">
                                                    <div
                                                        class="card-header border-bottom-0 align-content-start pb-sm-0 pb-1 px-0">
                                                        <h4 class="fw-500">1. Please create your account</h4>
                                                    </div>
                                                    <div class="card-body px-0 pb-0">
                                                        <div class="edit-profile__body">
                                                            <form>
                                                                <div class="form-group">
                                                                    <label for="name1">Username</label>
                                                                    <input type="text" class="form-control"
                                                                        id="name1" placeholder="Usename">
                                                                </div>
                                                                <div class="form-group create-passord">
                                                                    <label for="phoneNumber1">Password</label>
                                                                    <input type="password" class="form-control"
                                                                        id="phoneNumber1" placeholder="Password"
                                                                        value="121445">
                                                                </div>
                                                                <div class="form-group create-passord">
                                                                    <label for="phoneNumber">Confirm Password</label>
                                                                    <input type="password" class="form-control"
                                                                        id="phoneNumber" placeholder="Password"
                                                                        value="121445">
                                                                </div>
                                                                <div
                                                                    class="d-flex pt-15 justify-content-md-end justify-content-center">
                                                                    <a href="checkout2-wizard7.html"
                                                                        class="btn btn-primary btn-default btn-squared text-capitalize text-white">Save
                                                                        &amp; Next<i
                                                                            class="ml-10 mr-0 las la-arrow-right"></i></a>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div><!-- ends: card -->
                                            </div><!-- ends: col -->
                                        </div>
                                    </div><!-- ends: col -->
                                </div>
                            </div><!-- End: .global-shadow-->
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="title">Edit Profile</h5>
                                    </div>
                                    <div class="card-body">
                                        <form class="">
                                            <div class="row">
                                                <div class="pr-md-1 col-md-5">
                                                    <div class="form-group">
                                                        <label>Company (disabled)</label>
                                                        <input disabled="" placeholder="Company" type="text"
                                                            class="form-control" value="Creative Code Inc.">
                                                    </div>
                                                </div>
                                                <div class="px-md-1 col-md-3">
                                                    <div class="form-group">
                                                        <label>Username</label>
                                                        <input placeholder="Username" type="text" class="form-control"
                                                            value="michael23">
                                                    </div>
                                                </div>
                                                <div class="pl-md-1 col-md-4">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Email address</label>
                                                        <input placeholder="mike@email.com" type="email"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="pr-md-1 col-md-6">
                                                    <div class="form-group">
                                                        <label>First Name</label>
                                                        <input placeholder="Company" type="text" class="form-control"
                                                            value="Mike">
                                                    </div>
                                                </div>
                                                <div class="pl-md-1 col-md-6">
                                                    <div class="form-group"><label>Last Name</label><input
                                                            placeholder="Last Name" type="text" class="form-control"
                                                            value="Andrew"></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group"><label>Address</label><input
                                                            placeholder="Home Address" type="text"
                                                            class="form-control"
                                                            value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09"></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="pr-md-1 col-md-4">
                                                    <div class="form-group"><label>City</label><input placeholder="City"
                                                            type="text" class="form-control" value="Mike"></div>
                                                </div>
                                                <div class="px-md-1 col-md-4">
                                                    <div class="form-group"><label>Country</label><input
                                                            placeholder="Country" type="text" class="form-control"
                                                            value="Andrew"></div>
                                                </div>
                                                <div class="pl-md-1 col-md-4">
                                                    <div class="form-group"><label>Postal Code</label><input
                                                            placeholder="ZIP Code" type="number" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="form-group"><label>About Me</label>
                                                        <textarea cols="80" placeholder="Here can be your description" rows="4" class="form-control">Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer"><button type="submit"
                                            class="btn-fill btn btn-primary">Save</button></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card-user card">
                                    <div class="card-body">
                                        <p class="card-text"></p>
                                        <div class="author">
                                            <div class="block block-one"></div>
                                            <div class="block block-two"></div>
                                            <div class="block block-three"></div>
                                            <div class="block block-four"></div><a href="#pablo"><img alt="..."
                                                    class="avatar"
                                                    src="/black-dashboard-react/static/media/emilyz.105ff23d.jpg">
                                                <h5 class="title">Mike Andrew</h5>
                                            </a>
                                            <p class="description">Ceo/Co-Founder</p>
                                        </div>
                                        <div class="card-description">Do not be scared of the truth because we need to
                                            restart the human foundation in truth And I love you like Kanye loves Kanye I
                                            love Rick Owens’ bed design but the back is...</div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="button-container"><button
                                                class="btn-icon btn-round btn btn-facebook"><i
                                                    class="fab fa-facebook"></i></button><button
                                                class="btn-icon btn-round btn btn-twitter"><i
                                                    class="fab fa-twitter"></i></button><button
                                                class="btn-icon btn-round btn btn-google"><i
                                                    class="fab fa-google-plus"></i></button></div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
