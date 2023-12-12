@extends('layouts.admin')

@section('content')
    <main class="main-content">
        <div class="contents">
            <div class="chat-area d-flex mb-40">
                <div class="mb-lg-0 mb-40 chat-sidebar">
                    <div class="sidebar-group left-sidebar chat_sidebar">
                        <div id="chat" class="left-sidebar-wrap bg-white radius-xl active">
                            <div class="chat-wrapper py-25">
                                <div class="search-header">
                                    <form action="/" class="d-flex align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-search">
                                            <circle cx="11" cy="11" r="8"></circle>
                                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                        </svg>
                                        <input class="form-control mr-sm-2 border-0 box-shadow-none" type="search"
                                            placeholder="Search" aria-label="Search">
                                    </form>
                                </div><!-- Ends: .search-header -->
                                <div class="search-tab">
                                    <ul class="nav ap-tab-main border-bottom text-capitalize" id="ueberTab"
                                        role="tablist">
                                        <li class="nav-item mr-0">
                                            <a class="nav-link active" id="first-tab" data-target="#panel_b_first"
                                                data-secondary="#panel_a_first" data-toggle="tab" href="#first"
                                                role="tab" aria-controls="first-tab" aria-selected="true">private
                                                chat</a>
                                        </li>
                                        <li class="nav-item mr-0">
                                            <a class="nav-link group-notification" id="second-tab"
                                                data-target="#panel_b_second" data-secondary="#panel_a_second"
                                                data-toggle="tab" href="#second" role="tab"
                                                aria-controls="second-tab" aria-selected="false">
                                                group chat
                                                <span class="total-message ml-1">
                                                    <span class="badge badge-danger ">5</span>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="nav-item mr-0">
                                            <a class="nav-link" id="third-tab" data-target="#panel_b_thrid"
                                                data-secondary="#panel_a_third" data-toggle="tab" href="#third"
                                                role="tab" aria-controls="third-tab" aria-selected="false">all
                                                contact</a>
                                        </li>
                                    </ul>
                                </div><!-- Ends: .search-tab -->
                                <div class="search-body">
                                    <div class="tab-content" id="ueberTabA">
                                        <div class="tab-pane fade active show" id="panel_a_first" role="tabpanel"
                                            aria-labelledby="first-tab">
                                            <ul class="user-list">




                                                <li class="user-list-item">
                                                    <div class="user-list-item__wrapper">
                                                        <div class="avatar avatar-circle ml-0">
                                                            <img src="img/ellipse1.png"
                                                                class="rounded-circle wh-46 d-flex bg-opacity-primary"
                                                                alt="image">
                                                            <div class="badge-direction-bottom">
                                                                <span class="chat-badge-dot avatar-online"></span>
                                                            </div>
                                                        </div>
                                                        <div class="users-list-body">
                                                            <div class="users-list-body-title">
                                                                <h6>Meyri Carles</h6>
                                                                <div class="text-limit" data-maxlength="10">
                                                                    <p class="mb-0"><span>Lorem ipsum dolor us was they
                                                                            amet</span>...</p>
                                                                </div>
                                                            </div>
                                                            <div class="last-chat-time unread">
                                                                <small>14:45 pm</small>

                                                                <div class="total-message mt-1 d-flex justify-content-end">
                                                                    <span class="badge badge-success ">5</span>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>





                                                <li class="user-list-item">
                                                    <div class="user-list-item__wrapper">
                                                        <div class="avatar avatar-circle ml-0">
                                                            <img src="img/ellipse2.png"
                                                                class="rounded-circle wh-46 d-flex bg-opacity-primary"
                                                                alt="image">
                                                            <div class="badge-direction-bottom">
                                                                <span class="chat-badge-dot avatar-offline"></span>
                                                            </div>
                                                        </div>
                                                        <div class="users-list-body">
                                                            <div class="users-list-body-title">
                                                                <h6>Shreyu Neu</h6>
                                                                <div class="text-limit" data-maxlength="10">
                                                                    <p class="mb-0"><span>Lorem ipsum dolor us was they
                                                                            amet</span>...</p>
                                                                </div>
                                                            </div>
                                                            <div class="last-chat-time unread">
                                                                <small>14:45 pm</small>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>





                                                <li class="user-list-item">
                                                    <div class="user-list-item__wrapper">
                                                        <div class="avatar avatar-circle ml-0">
                                                            <img src="img/ellipse3.png"
                                                                class="rounded-circle wh-46 d-flex bg-opacity-primary"
                                                                alt="image">
                                                            <div class="badge-direction-bottom">
                                                                <span class="chat-badge-dot avatar-online"></span>
                                                            </div>
                                                        </div>
                                                        <div class="users-list-body">
                                                            <div class="users-list-body-title">
                                                                <h6>Domnic Harris</h6>
                                                                <div class="text-limit" data-maxlength="10">
                                                                    <p class="mb-0"><span>Lorem ipsum dolor us was they
                                                                            amet</span>...</p>
                                                                </div>
                                                            </div>
                                                            <div class="last-chat-time unread">
                                                                <small>14:45 pm</small>

                                                                <div class="total-message mt-1 d-flex justify-content-end">
                                                                    <span class="badge badge-success ">15</span>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>





                                                <li class="user-list-item">
                                                    <div class="user-list-item__wrapper">
                                                        <div class="avatar avatar-circle ml-0">
                                                            <img src="img/ellipse4.png"
                                                                class="rounded-circle wh-46 d-flex bg-opacity-primary"
                                                                alt="image">
                                                            <div class="badge-direction-bottom">
                                                                <span class="chat-badge-dot avatar-offline"></span>
                                                            </div>
                                                        </div>
                                                        <div class="users-list-body">
                                                            <div class="users-list-body-title">
                                                                <h6>Khalid Hasan</h6>
                                                                <div class="text-limit" data-maxlength="10">
                                                                    <p class="mb-0"><span>Lorem ipsum dolor us was they
                                                                            amet</span>...</p>
                                                                </div>
                                                            </div>
                                                            <div class="last-chat-time unread">
                                                                <small>14:45 pm</small>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>





                                                <li class="user-list-item">
                                                    <div class="user-list-item__wrapper">
                                                        <div class="avatar avatar-circle ml-0">
                                                            <img src="img/ellipse5.png"
                                                                class="rounded-circle wh-46 d-flex bg-opacity-primary"
                                                                alt="image">
                                                            <div class="badge-direction-bottom">
                                                                <span class="chat-badge-dot avatar-online"></span>
                                                            </div>
                                                        </div>
                                                        <div class="users-list-body">
                                                            <div class="users-list-body-title">
                                                                <h6>Tuhin Molla</h6>
                                                                <div class="text-limit" data-maxlength="10">
                                                                    <p class="mb-0"><span>Lorem ipsum dolor us was they
                                                                            amet</span>...</p>
                                                                </div>
                                                            </div>
                                                            <div class="last-chat-time unread">
                                                                <small>14:45 pm</small>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>





                                                <li class="user-list-item">
                                                    <div class="user-list-item__wrapper">
                                                        <div class="avatar avatar-circle ml-0">
                                                            <img src="img/ellipse6.png"
                                                                class="rounded-circle wh-46 d-flex bg-opacity-primary"
                                                                alt="image">
                                                            <div class="badge-direction-bottom">
                                                                <span class="chat-badge-dot avatar-online"></span>
                                                            </div>
                                                        </div>
                                                        <div class="users-list-body">
                                                            <div class="users-list-body-title">
                                                                <h6>Billal Hossain</h6>
                                                                <div class="text-limit" data-maxlength="10">
                                                                    <p class="mb-0"><span>Lorem ipsum dolor us was they
                                                                            amet</span>...</p>
                                                                </div>
                                                            </div>
                                                            <div class="last-chat-time unread">
                                                                <small>14:45 pm</small>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>





                                                <li class="user-list-item">
                                                    <div class="user-list-item__wrapper">
                                                        <div class="avatar avatar-circle ml-0">
                                                            <img src="img/ellipse7.png"
                                                                class="rounded-circle wh-46 d-flex bg-opacity-primary"
                                                                alt="image">
                                                            <div class="badge-direction-bottom">
                                                                <span class="chat-badge-dot avatar-online"></span>
                                                            </div>
                                                        </div>
                                                        <div class="users-list-body">
                                                            <div class="users-list-body-title">
                                                                <h6>Ibn Adam</h6>
                                                                <div class="text-limit" data-maxlength="10">
                                                                    <p class="mb-0"><span>Lorem ipsum dolor us was they
                                                                            amet</span>...</p>
                                                                </div>
                                                            </div>
                                                            <div class="last-chat-time unread">
                                                                <small>14:45 pm</small>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>





                                                <li class="user-list-item">
                                                    <div class="user-list-item__wrapper">
                                                        <div class="avatar avatar-circle ml-0">
                                                            <img src="img/ellipse8.png"
                                                                class="rounded-circle wh-46 d-flex bg-opacity-primary"
                                                                alt="image">
                                                            <div class="badge-direction-bottom">
                                                                <span class="chat-badge-dot avatar-offline"></span>
                                                            </div>
                                                        </div>
                                                        <div class="users-list-body">
                                                            <div class="users-list-body-title">
                                                                <h6>Tanim</h6>
                                                                <div class="text-limit" data-maxlength="10">
                                                                    <p class="mb-0"><span>Lorem ipsum dolor us was they
                                                                            amet</span>...</p>
                                                                </div>
                                                            </div>
                                                            <div class="last-chat-time unread">
                                                                <small>14:45 pm</small>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>





                                                <li class="user-list-item">
                                                    <div class="user-list-item__wrapper">
                                                        <div class="avatar avatar-circle ml-0">
                                                            <img src="img/ellipse9.png"
                                                                class="rounded-circle wh-46 d-flex bg-opacity-primary"
                                                                alt="image">
                                                            <div class="badge-direction-bottom">
                                                                <span class="chat-badge-dot avatar-online"></span>
                                                            </div>
                                                        </div>
                                                        <div class="users-list-body">
                                                            <div class="users-list-body-title">
                                                                <h6>Tabib Rahman</h6>
                                                                <div class="text-limit" data-maxlength="10">
                                                                    <p class="mb-0"><span>Lorem ipsum dolor us was they
                                                                            amet</span>...</p>
                                                                </div>
                                                            </div>
                                                            <div class="last-chat-time unread">
                                                                <small>14:45 pm</small>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>





                                                <li class="user-list-item">
                                                    <div class="user-list-item__wrapper">
                                                        <div class="avatar avatar-circle ml-0">
                                                            <img src="img/ellipse2.png"
                                                                class="rounded-circle wh-46 d-flex bg-opacity-primary"
                                                                alt="image">
                                                            <div class="badge-direction-bottom">
                                                                <span class="chat-badge-dot avatar-online"></span>
                                                            </div>
                                                        </div>
                                                        <div class="users-list-body">
                                                            <div class="users-list-body-title">
                                                                <h6>Shreyu Neu</h6>
                                                                <div class="text-limit" data-maxlength="10">
                                                                    <p class="mb-0"><span>Lorem ipsum dolor us was they
                                                                            amet</span>...</p>
                                                                </div>
                                                            </div>
                                                            <div class="last-chat-time unread">
                                                                <small>14:45 pm</small>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>





                                                <li class="user-list-item">
                                                    <div class="user-list-item__wrapper">
                                                        <div class="avatar avatar-circle ml-0">
                                                            <img src="img/ellipse1.png"
                                                                class="rounded-circle wh-46 d-flex bg-opacity-primary"
                                                                alt="image">
                                                            <div class="badge-direction-bottom">
                                                                <span class="chat-badge-dot avatar-online"></span>
                                                            </div>
                                                        </div>
                                                        <div class="users-list-body">
                                                            <div class="users-list-body-title">
                                                                <h6>Meyri Carles</h6>
                                                                <div class="text-limit" data-maxlength="10">
                                                                    <p class="mb-0"><span>Lorem ipsum dolor us was they
                                                                            amet</span>...</p>
                                                                </div>
                                                            </div>
                                                            <div class="last-chat-time unread">
                                                                <small>14:45 pm</small>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>





                                                <li class="user-list-item">
                                                    <div class="user-list-item__wrapper">
                                                        <div class="avatar avatar-circle ml-0">
                                                            <img src="img/ellipse3.png"
                                                                class="rounded-circle wh-46 d-flex bg-opacity-primary"
                                                                alt="image">
                                                            <div class="badge-direction-bottom">
                                                                <span class="chat-badge-dot avatar-offline"></span>
                                                            </div>
                                                        </div>
                                                        <div class="users-list-body">
                                                            <div class="users-list-body-title">
                                                                <h6>Domnic Harris</h6>
                                                                <div class="text-limit" data-maxlength="10">
                                                                    <p class="mb-0"><span>Lorem ipsum dolor us was they
                                                                            amet</span>...</p>
                                                                </div>
                                                            </div>
                                                            <div class="last-chat-time unread">
                                                                <small>14:45 pm</small>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>





                                                <li class="user-list-item">
                                                    <div class="user-list-item__wrapper">
                                                        <div class="avatar avatar-circle ml-0">
                                                            <img src="img/ellipse4.png"
                                                                class="rounded-circle wh-46 d-flex bg-opacity-primary"
                                                                alt="image">
                                                            <div class="badge-direction-bottom">
                                                                <span class="chat-badge-dot avatar-online"></span>
                                                            </div>
                                                        </div>
                                                        <div class="users-list-body">
                                                            <div class="users-list-body-title">
                                                                <h6>Khalid Hasan</h6>
                                                                <div class="text-limit" data-maxlength="10">
                                                                    <p class="mb-0"><span>Lorem ipsum dolor us was they
                                                                            amet</span>...</p>
                                                                </div>
                                                            </div>
                                                            <div class="last-chat-time unread">
                                                                <small>14:45 pm</small>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>





                                                <li class="user-list-item">
                                                    <div class="user-list-item__wrapper">
                                                        <div class="avatar avatar-circle ml-0">
                                                            <img src="img/ellipse1.png"
                                                                class="rounded-circle wh-46 d-flex bg-opacity-primary"
                                                                alt="image">
                                                            <div class="badge-direction-bottom">
                                                                <span class="chat-badge-dot avatar-online"></span>
                                                            </div>
                                                        </div>
                                                        <div class="users-list-body">
                                                            <div class="users-list-body-title">
                                                                <h6>Meyri Carles</h6>
                                                                <div class="text-limit" data-maxlength="10">
                                                                    <p class="mb-0"><span>Lorem ipsum dolor us was they
                                                                            amet</span>...</p>
                                                                </div>
                                                            </div>
                                                            <div class="last-chat-time unread">
                                                                <small>14:45 pm</small>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>





                                                <li class="user-list-item">
                                                    <div class="user-list-item__wrapper">
                                                        <div class="avatar avatar-circle ml-0">
                                                            <img src="img/ellipse6.png"
                                                                class="rounded-circle wh-46 d-flex bg-opacity-primary"
                                                                alt="image">
                                                            <div class="badge-direction-bottom">
                                                                <span class="chat-badge-dot avatar-offline"></span>
                                                            </div>
                                                        </div>
                                                        <div class="users-list-body">
                                                            <div class="users-list-body-title">
                                                                <h6>Billal Hossain</h6>
                                                                <div class="text-limit" data-maxlength="10">
                                                                    <p class="mb-0"><span>Lorem ipsum dolor us was they
                                                                            amet</span>...</p>
                                                                </div>
                                                            </div>
                                                            <div class="last-chat-time unread">
                                                                <small>14:45 pm</small>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>
                                        <div class="tab-pane fade" id="panel_a_second" role="tabpanel"
                                            aria-labelledby="second-tab">
                                            <ul class="user-list">



                                                <li>
                                                    <div class="user-button-top">
                                                        <button type="button"
                                                            class="border bg-normal color-gray rounded-pill content-center"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-edit">
                                                                <path
                                                                    d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7">
                                                                </path>
                                                                <path
                                                                    d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z">
                                                                </path>
                                                            </svg>create a new group</button>
                                                    </div>
                                                </li>


                                                <li class="user-list-item">
                                                    <div class="user-list-item__wrapper">
                                                        <div class="avatar avatar-circle ml-0">
                                                            <img src="img/ellipse1.png"
                                                                class="rounded-circle wh-46 d-flex bg-opacity-primary"
                                                                alt="image">
                                                            <div class="badge-direction-bottom">
                                                                <span class="chat-badge-dot avatar-online"></span>
                                                            </div>
                                                        </div>
                                                        <div class="users-list-body">
                                                            <div class="users-list-body-title">
                                                                <h6>Meyri Carles</h6>
                                                                <div class="text-limit" data-maxlength="10">
                                                                    <p class="mb-0"><span>Lorem ipsum dolor us was they
                                                                            amet</span>...</p>
                                                                </div>
                                                            </div>
                                                            <div class="last-chat-time unread">
                                                                <small>14:45 pm</small>

                                                                <div class="total-message mt-1 d-flex justify-content-end">
                                                                    <span class="badge badge-success ">2</span>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>





                                                <li class="user-list-item">
                                                    <div class="user-list-item__wrapper">
                                                        <div class="avatar avatar-circle ml-0">
                                                            <img src="img/ellipse2.png"
                                                                class="rounded-circle wh-46 d-flex bg-opacity-primary"
                                                                alt="image">
                                                            <div class="badge-direction-bottom">
                                                                <span class="chat-badge-dot avatar-offline"></span>
                                                            </div>
                                                        </div>
                                                        <div class="users-list-body">
                                                            <div class="users-list-body-title">
                                                                <h6>Meyri Carles</h6>
                                                                <div class="text-limit" data-maxlength="10">
                                                                    <p class="mb-0"><span>Lorem ipsum dolor us was they
                                                                            amet</span>...</p>
                                                                </div>
                                                            </div>
                                                            <div class="last-chat-time unread">
                                                                <small>14:45 pm</small>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>





                                                <li class="user-list-item">
                                                    <div class="user-list-item__wrapper">
                                                        <div class="avatar avatar-circle ml-0">
                                                            <img src="img/ellipse3.png"
                                                                class="rounded-circle wh-46 d-flex bg-opacity-primary"
                                                                alt="image">
                                                            <div class="badge-direction-bottom">
                                                                <span class="chat-badge-dot avatar-online"></span>
                                                            </div>
                                                        </div>
                                                        <div class="users-list-body">
                                                            <div class="users-list-body-title">
                                                                <h6>Meyri Carles</h6>
                                                                <div class="text-limit" data-maxlength="10">
                                                                    <p class="mb-0"><span>Lorem ipsum dolor us was they
                                                                            amet</span>...</p>
                                                                </div>
                                                            </div>
                                                            <div class="last-chat-time unread">
                                                                <small>14:45 pm</small>

                                                                <div class="total-message mt-1 d-flex justify-content-end">
                                                                    <span class="badge badge-success ">12</span>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>





                                                <li class="user-list-item">
                                                    <div class="user-list-item__wrapper">
                                                        <div class="avatar avatar-circle ml-0">
                                                            <img src="img/ellipse4.png"
                                                                class="rounded-circle wh-46 d-flex bg-opacity-primary"
                                                                alt="image">
                                                            <div class="badge-direction-bottom">
                                                                <span class="chat-badge-dot avatar-offline"></span>
                                                            </div>
                                                        </div>
                                                        <div class="users-list-body">
                                                            <div class="users-list-body-title">
                                                                <h6>Meyri Carles</h6>
                                                                <div class="text-limit" data-maxlength="10">
                                                                    <p class="mb-0"><span>Lorem ipsum dolor us was they
                                                                            amet</span>...</p>
                                                                </div>
                                                            </div>
                                                            <div class="last-chat-time unread">
                                                                <small>14:45 pm</small>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>





                                                <li class="user-list-item">
                                                    <div class="user-list-item__wrapper">
                                                        <div class="avatar avatar-circle ml-0">
                                                            <img src="img/ellipse5.png"
                                                                class="rounded-circle wh-46 d-flex bg-opacity-primary"
                                                                alt="image">
                                                            <div class="badge-direction-bottom">
                                                                <span class="chat-badge-dot avatar-online"></span>
                                                            </div>
                                                        </div>
                                                        <div class="users-list-body">
                                                            <div class="users-list-body-title">
                                                                <h6>Meyri Carles</h6>
                                                                <div class="text-limit" data-maxlength="10">
                                                                    <p class="mb-0"><span>Lorem ipsum dolor us was they
                                                                            amet</span>...</p>
                                                                </div>
                                                            </div>
                                                            <div class="last-chat-time unread">
                                                                <small>14:45 pm</small>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>





                                                <li class="user-list-item">
                                                    <div class="user-list-item__wrapper">
                                                        <div class="avatar avatar-circle ml-0">
                                                            <img src="img/ellipse6.png"
                                                                class="rounded-circle wh-46 d-flex bg-opacity-primary"
                                                                alt="image">
                                                            <div class="badge-direction-bottom">
                                                                <span class="chat-badge-dot avatar-online"></span>
                                                            </div>
                                                        </div>
                                                        <div class="users-list-body">
                                                            <div class="users-list-body-title">
                                                                <h6>Meyri Carles</h6>
                                                                <div class="text-limit" data-maxlength="10">
                                                                    <p class="mb-0"><span>Lorem ipsum dolor us was they
                                                                            amet</span>...</p>
                                                                </div>
                                                            </div>
                                                            <div class="last-chat-time unread">
                                                                <small>14:45 pm</small>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>





                                                <li class="user-list-item">
                                                    <div class="user-list-item__wrapper">
                                                        <div class="avatar avatar-circle ml-0">
                                                            <img src="img/ellipse7.png"
                                                                class="rounded-circle wh-46 d-flex bg-opacity-primary"
                                                                alt="image">
                                                            <div class="badge-direction-bottom">
                                                                <span class="chat-badge-dot avatar-online"></span>
                                                            </div>
                                                        </div>
                                                        <div class="users-list-body">
                                                            <div class="users-list-body-title">
                                                                <h6>Meyri Carles</h6>
                                                                <div class="text-limit" data-maxlength="10">
                                                                    <p class="mb-0"><span>Lorem ipsum dolor us was they
                                                                            amet</span>...</p>
                                                                </div>
                                                            </div>
                                                            <div class="last-chat-time unread">
                                                                <small>14:45 pm</small>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>





                                                <li class="user-list-item">
                                                    <div class="user-list-item__wrapper">
                                                        <div class="avatar avatar-circle ml-0">
                                                            <img src="img/ellipse8.png"
                                                                class="rounded-circle wh-46 d-flex bg-opacity-primary"
                                                                alt="image">
                                                            <div class="badge-direction-bottom">
                                                                <span class="chat-badge-dot avatar-online"></span>
                                                            </div>
                                                        </div>
                                                        <div class="users-list-body">
                                                            <div class="users-list-body-title">
                                                                <h6>Meyri Carles</h6>
                                                                <div class="text-limit" data-maxlength="10">
                                                                    <p class="mb-0"><span>Lorem ipsum dolor us was they
                                                                            amet</span>...</p>
                                                                </div>
                                                            </div>
                                                            <div class="last-chat-time unread">
                                                                <small>14:45 pm</small>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>





                                                <li class="user-list-item">
                                                    <div class="user-list-item__wrapper">
                                                        <div class="avatar avatar-circle ml-0">
                                                            <img src="img/ellipse9.png"
                                                                class="rounded-circle wh-46 d-flex bg-opacity-primary"
                                                                alt="image">
                                                            <div class="badge-direction-bottom">
                                                                <span class="chat-badge-dot avatar-online"></span>
                                                            </div>
                                                        </div>
                                                        <div class="users-list-body">
                                                            <div class="users-list-body-title">
                                                                <h6>Meyri Carles</h6>
                                                                <div class="text-limit" data-maxlength="10">
                                                                    <p class="mb-0"><span>Lorem ipsum dolor us was they
                                                                            amet</span>...</p>
                                                                </div>
                                                            </div>
                                                            <div class="last-chat-time unread">
                                                                <small>14:45 pm</small>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>





                                                <li class="user-list-item">
                                                    <div class="user-list-item__wrapper">
                                                        <div class="avatar avatar-circle ml-0">
                                                            <img src="img/ellipse10.png"
                                                                class="rounded-circle wh-46 d-flex bg-opacity-primary"
                                                                alt="image">
                                                            <div class="badge-direction-bottom">
                                                                <span class="chat-badge-dot avatar-offline"></span>
                                                            </div>
                                                        </div>
                                                        <div class="users-list-body">
                                                            <div class="users-list-body-title">
                                                                <h6>Meyri Carles</h6>
                                                                <div class="text-limit" data-maxlength="10">
                                                                    <p class="mb-0"><span>Lorem ipsum dolor us was they
                                                                            amet</span>...</p>
                                                                </div>
                                                            </div>
                                                            <div class="last-chat-time unread">
                                                                <small>14:45 pm</small>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>





                                                <li class="user-list-item">
                                                    <div class="user-list-item__wrapper">
                                                        <div class="avatar avatar-circle ml-0">
                                                            <img src="img/ellipse11.png"
                                                                class="rounded-circle wh-46 d-flex bg-opacity-primary"
                                                                alt="image">
                                                            <div class="badge-direction-bottom">
                                                                <span class="chat-badge-dot avatar-online"></span>
                                                            </div>
                                                        </div>
                                                        <div class="users-list-body">
                                                            <div class="users-list-body-title">
                                                                <h6>Meyri Carles</h6>
                                                                <div class="text-limit" data-maxlength="10">
                                                                    <p class="mb-0"><span>Lorem ipsum dolor us was they
                                                                            amet</span>...</p>
                                                                </div>
                                                            </div>
                                                            <div class="last-chat-time unread">
                                                                <small>14:45 pm</small>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>





                                                <li class="user-list-item">
                                                    <div class="user-list-item__wrapper">
                                                        <div class="avatar avatar-circle ml-0">
                                                            <img src="img/ellipse12.png"
                                                                class="rounded-circle wh-46 d-flex bg-opacity-primary"
                                                                alt="image">
                                                            <div class="badge-direction-bottom">
                                                                <span class="chat-badge-dot avatar-online"></span>
                                                            </div>
                                                        </div>
                                                        <div class="users-list-body">
                                                            <div class="users-list-body-title">
                                                                <h6>Meyri Carles</h6>
                                                                <div class="text-limit" data-maxlength="10">
                                                                    <p class="mb-0"><span>Lorem ipsum dolor us was they
                                                                            amet</span>...</p>
                                                                </div>
                                                            </div>
                                                            <div class="last-chat-time unread">
                                                                <small>14:45 pm</small>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>





                                                <li class="user-list-item">
                                                    <div class="user-list-item__wrapper">
                                                        <div class="avatar avatar-circle ml-0">
                                                            <img src="img/ellipse13.png"
                                                                class="rounded-circle wh-46 d-flex bg-opacity-primary"
                                                                alt="image">
                                                            <div class="badge-direction-bottom">
                                                                <span class="chat-badge-dot avatar-online"></span>
                                                            </div>
                                                        </div>
                                                        <div class="users-list-body">
                                                            <div class="users-list-body-title">
                                                                <h6>Meyri Carles</h6>
                                                                <div class="text-limit" data-maxlength="10">
                                                                    <p class="mb-0"><span>Lorem ipsum dolor us was they
                                                                            amet</span>...</p>
                                                                </div>
                                                            </div>
                                                            <div class="last-chat-time unread">
                                                                <small>14:45 pm</small>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>





                                                <li class="user-list-item">
                                                    <div class="user-list-item__wrapper">
                                                        <div class="avatar avatar-circle ml-0">
                                                            <img src="img/ellipse2.png"
                                                                class="rounded-circle wh-46 d-flex bg-opacity-primary"
                                                                alt="image">
                                                            <div class="badge-direction-bottom">
                                                                <span class="chat-badge-dot avatar-offline"></span>
                                                            </div>
                                                        </div>
                                                        <div class="users-list-body">
                                                            <div class="users-list-body-title">
                                                                <h6>Meyri Carles</h6>
                                                                <div class="text-limit" data-maxlength="10">
                                                                    <p class="mb-0"><span>Lorem ipsum dolor us was they
                                                                            amet</span>...</p>
                                                                </div>
                                                            </div>
                                                            <div class="last-chat-time unread">
                                                                <small>14:45 pm</small>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>





                                                <li class="user-list-item">
                                                    <div class="user-list-item__wrapper">
                                                        <div class="avatar avatar-circle ml-0">
                                                            <img src="img/ellipse15.png"
                                                                class="rounded-circle wh-46 d-flex bg-opacity-primary"
                                                                alt="image">
                                                            <div class="badge-direction-bottom">
                                                                <span class="chat-badge-dot avatar-online"></span>
                                                            </div>
                                                        </div>
                                                        <div class="users-list-body">
                                                            <div class="users-list-body-title">
                                                                <h6>Meyri Carles</h6>
                                                                <div class="text-limit" data-maxlength="10">
                                                                    <p class="mb-0"><span>Lorem ipsum dolor us was they
                                                                            amet</span>...</p>
                                                                </div>
                                                            </div>
                                                            <div class="last-chat-time unread">
                                                                <small>14:45 pm</small>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>
                                        <div class="tab-pane fade" id="panel_a_third" role="tabpanel"
                                            aria-labelledby="third-tab">
                                            <ul class="user-list">



                                                <li>
                                                    <div class="user-button-top">
                                                        <button type="button"
                                                            class="border bg-normal color-gray rounded-pill content-center"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-user-plus">
                                                                <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                                                <circle cx="8.5" cy="7" r="4"></circle>
                                                                <line x1="20" y1="8" x2="20"
                                                                    y2="14"></line>
                                                                <line x1="23" y1="11" x2="17"
                                                                    y2="11"></line>
                                                            </svg>Add New Contact</button>
                                                    </div>
                                                </li>


                                                <li class="user-list-item">
                                                    <div class="user-list-item__wrapper">
                                                        <div class="avatar avatar-circle ml-0">
                                                            <img src="img/ellipse1.png"
                                                                class="rounded-circle wh-46 d-flex bg-opacity-primary"
                                                                alt="image">
                                                            <div class="badge-direction-bottom">
                                                                <span class="chat-badge-dot avatar-online"></span>
                                                            </div>
                                                        </div>
                                                        <div class="users-list-body">
                                                            <div class="users-list-body-title">
                                                                <h6>Meyri Carles</h6>
                                                                <div class="text-limit" data-maxlength="10">
                                                                    <p class="mb-0"><span>Lorem ipsum dolor us was they
                                                                            amet</span>...</p>
                                                                </div>
                                                            </div>
                                                            <div class="last-chat-time unread">
                                                                <small>14:45 pm</small>

                                                                <div class="total-message mt-1 d-flex justify-content-end">
                                                                    <span class="badge badge-success ">4</span>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>





                                                <li class="user-list-item">
                                                    <div class="user-list-item__wrapper">
                                                        <div class="avatar avatar-circle ml-0">
                                                            <img src="img/ellipse2.png"
                                                                class="rounded-circle wh-46 d-flex bg-opacity-primary"
                                                                alt="image">
                                                            <div class="badge-direction-bottom">
                                                                <span class="chat-badge-dot avatar-offline"></span>
                                                            </div>
                                                        </div>
                                                        <div class="users-list-body">
                                                            <div class="users-list-body-title">
                                                                <h6>Meyri Carles</h6>
                                                                <div class="text-limit" data-maxlength="10">
                                                                    <p class="mb-0"><span>Lorem ipsum dolor us was they
                                                                            amet</span>...</p>
                                                                </div>
                                                            </div>
                                                            <div class="last-chat-time unread">
                                                                <small>14:45 pm</small>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>





                                                <li class="user-list-item">
                                                    <div class="user-list-item__wrapper">
                                                        <div class="avatar avatar-circle ml-0">
                                                            <img src="img/ellipse3.png"
                                                                class="rounded-circle wh-46 d-flex bg-opacity-primary"
                                                                alt="image">
                                                            <div class="badge-direction-bottom">
                                                                <span class="chat-badge-dot avatar-online"></span>
                                                            </div>
                                                        </div>
                                                        <div class="users-list-body">
                                                            <div class="users-list-body-title">
                                                                <h6>Meyri Carles</h6>
                                                                <div class="text-limit" data-maxlength="10">
                                                                    <p class="mb-0"><span>Lorem ipsum dolor us was they
                                                                            amet</span>...</p>
                                                                </div>
                                                            </div>
                                                            <div class="last-chat-time unread">
                                                                <small>14:45 pm</small>

                                                                <div class="total-message mt-1 d-flex justify-content-end">
                                                                    <span class="badge badge-success ">24</span>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>





                                                <li class="user-list-item">
                                                    <div class="user-list-item__wrapper">
                                                        <div class="avatar avatar-circle ml-0">
                                                            <img src="img/ellipse4.png"
                                                                class="rounded-circle wh-46 d-flex bg-opacity-primary"
                                                                alt="image">
                                                            <div class="badge-direction-bottom">
                                                                <span class="chat-badge-dot avatar-offline"></span>
                                                            </div>
                                                        </div>
                                                        <div class="users-list-body">
                                                            <div class="users-list-body-title">
                                                                <h6>Meyri Carles</h6>
                                                                <div class="text-limit" data-maxlength="10">
                                                                    <p class="mb-0"><span>Lorem ipsum dolor us was they
                                                                            amet</span>...</p>
                                                                </div>
                                                            </div>
                                                            <div class="last-chat-time unread">
                                                                <small>14:45 pm</small>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>





                                                <li class="user-list-item">
                                                    <div class="user-list-item__wrapper">
                                                        <div class="avatar avatar-circle ml-0">
                                                            <img src="img/ellipse5.png"
                                                                class="rounded-circle wh-46 d-flex bg-opacity-primary"
                                                                alt="image">
                                                            <div class="badge-direction-bottom">
                                                                <span class="chat-badge-dot avatar-online"></span>
                                                            </div>
                                                        </div>
                                                        <div class="users-list-body">
                                                            <div class="users-list-body-title">
                                                                <h6>Meyri Carles</h6>
                                                                <div class="text-limit" data-maxlength="10">
                                                                    <p class="mb-0"><span>Lorem ipsum dolor us was they
                                                                            amet</span>...</p>
                                                                </div>
                                                            </div>
                                                            <div class="last-chat-time unread">
                                                                <small>14:45 pm</small>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>





                                                <li class="user-list-item">
                                                    <div class="user-list-item__wrapper">
                                                        <div class="avatar avatar-circle ml-0">
                                                            <img src="img/ellipse6.png"
                                                                class="rounded-circle wh-46 d-flex bg-opacity-primary"
                                                                alt="image">
                                                            <div class="badge-direction-bottom">
                                                                <span class="chat-badge-dot avatar-offlien"></span>
                                                            </div>
                                                        </div>
                                                        <div class="users-list-body">
                                                            <div class="users-list-body-title">
                                                                <h6>Meyri Carles</h6>
                                                                <div class="text-limit" data-maxlength="10">
                                                                    <p class="mb-0"><span>Lorem ipsum dolor us was they
                                                                            amet</span>...</p>
                                                                </div>
                                                            </div>
                                                            <div class="last-chat-time unread">
                                                                <small>14:45 pm</small>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>





                                                <li class="user-list-item">
                                                    <div class="user-list-item__wrapper">
                                                        <div class="avatar avatar-circle ml-0">
                                                            <img src="img/ellipse7.png"
                                                                class="rounded-circle wh-46 d-flex bg-opacity-primary"
                                                                alt="image">
                                                            <div class="badge-direction-bottom">
                                                                <span class="chat-badge-dot avatar-online"></span>
                                                            </div>
                                                        </div>
                                                        <div class="users-list-body">
                                                            <div class="users-list-body-title">
                                                                <h6>Meyri Carles</h6>
                                                                <div class="text-limit" data-maxlength="10">
                                                                    <p class="mb-0"><span>Lorem ipsum dolor us was they
                                                                            amet</span>...</p>
                                                                </div>
                                                            </div>
                                                            <div class="last-chat-time unread">
                                                                <small>14:45 pm</small>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>





                                                <li class="user-list-item">
                                                    <div class="user-list-item__wrapper">
                                                        <div class="avatar avatar-circle ml-0">
                                                            <img src="img/ellipse8.png"
                                                                class="rounded-circle wh-46 d-flex bg-opacity-primary"
                                                                alt="image">
                                                            <div class="badge-direction-bottom">
                                                                <span class="chat-badge-dot avatar-online"></span>
                                                            </div>
                                                        </div>
                                                        <div class="users-list-body">
                                                            <div class="users-list-body-title">
                                                                <h6>Meyri Carles</h6>
                                                                <div class="text-limit" data-maxlength="10">
                                                                    <p class="mb-0"><span>Lorem ipsum dolor us was they
                                                                            amet</span>...</p>
                                                                </div>
                                                            </div>
                                                            <div class="last-chat-time unread">
                                                                <small>14:45 pm</small>

                                                                <div class="total-message mt-1 d-flex justify-content-end">
                                                                    <span class="badge badge-success ">3</span>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>





                                                <li class="user-list-item">
                                                    <div class="user-list-item__wrapper">
                                                        <div class="avatar avatar-circle ml-0">
                                                            <img src="img/ellipse9.png"
                                                                class="rounded-circle wh-46 d-flex bg-opacity-primary"
                                                                alt="image">
                                                            <div class="badge-direction-bottom">
                                                                <span class="chat-badge-dot avatar-offline"></span>
                                                            </div>
                                                        </div>
                                                        <div class="users-list-body">
                                                            <div class="users-list-body-title">
                                                                <h6>Meyri Carles</h6>
                                                                <div class="text-limit" data-maxlength="10">
                                                                    <p class="mb-0"><span>Lorem ipsum dolor us was they
                                                                            amet</span>...</p>
                                                                </div>
                                                            </div>
                                                            <div class="last-chat-time unread">
                                                                <small>14:45 pm</small>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>





                                                <li class="user-list-item">
                                                    <div class="user-list-item__wrapper">
                                                        <div class="avatar avatar-circle ml-0">
                                                            <img src="img/ellipse10.png"
                                                                class="rounded-circle wh-46 d-flex bg-opacity-primary"
                                                                alt="image">
                                                            <div class="badge-direction-bottom">
                                                                <span class="chat-badge-dot avatar-online"></span>
                                                            </div>
                                                        </div>
                                                        <div class="users-list-body">
                                                            <div class="users-list-body-title">
                                                                <h6>Meyri Carles</h6>
                                                                <div class="text-limit" data-maxlength="10">
                                                                    <p class="mb-0"><span>Lorem ipsum dolor us was they
                                                                            amet</span>...</p>
                                                                </div>
                                                            </div>
                                                            <div class="last-chat-time unread">
                                                                <small>14:45 pm</small>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>





                                                <li class="user-list-item">
                                                    <div class="user-list-item__wrapper">
                                                        <div class="avatar avatar-circle ml-0">
                                                            <img src="img/ellipse11.png"
                                                                class="rounded-circle wh-46 d-flex bg-opacity-primary"
                                                                alt="image">
                                                            <div class="badge-direction-bottom">
                                                                <span class="chat-badge-dot avatar-online"></span>
                                                            </div>
                                                        </div>
                                                        <div class="users-list-body">
                                                            <div class="users-list-body-title">
                                                                <h6>Meyri Carles</h6>
                                                                <div class="text-limit" data-maxlength="10">
                                                                    <p class="mb-0"><span>Lorem ipsum dolor us was they
                                                                            amet</span>...</p>
                                                                </div>
                                                            </div>
                                                            <div class="last-chat-time unread">
                                                                <small>14:45 pm</small>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>





                                                <li class="user-list-item">
                                                    <div class="user-list-item__wrapper">
                                                        <div class="avatar avatar-circle ml-0">
                                                            <img src="img/ellipse12.png"
                                                                class="rounded-circle wh-46 d-flex bg-opacity-primary"
                                                                alt="image">
                                                            <div class="badge-direction-bottom">
                                                                <span class="chat-badge-dot avatar-online"></span>
                                                            </div>
                                                        </div>
                                                        <div class="users-list-body">
                                                            <div class="users-list-body-title">
                                                                <h6>Meyri Carles</h6>
                                                                <div class="text-limit" data-maxlength="10">
                                                                    <p class="mb-0"><span>Lorem ipsum dolor us was they
                                                                            amet</span>...</p>
                                                                </div>
                                                            </div>
                                                            <div class="last-chat-time unread">
                                                                <small>14:45 pm</small>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>





                                                <li class="user-list-item">
                                                    <div class="user-list-item__wrapper">
                                                        <div class="avatar avatar-circle ml-0">
                                                            <img src="img/ellipse13.png"
                                                                class="rounded-circle wh-46 d-flex bg-opacity-primary"
                                                                alt="image">
                                                            <div class="badge-direction-bottom">
                                                                <span class="chat-badge-dot avatar-offline"></span>
                                                            </div>
                                                        </div>
                                                        <div class="users-list-body">
                                                            <div class="users-list-body-title">
                                                                <h6>Meyri Carles</h6>
                                                                <div class="text-limit" data-maxlength="10">
                                                                    <p class="mb-0"><span>Lorem ipsum dolor us was they
                                                                            amet</span>...</p>
                                                                </div>
                                                            </div>
                                                            <div class="last-chat-time unread">
                                                                <small>14:45 pm</small>

                                                                <div class="total-message mt-1 d-flex justify-content-end">
                                                                    <span class="badge badge-success ">3</span>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>





                                                <li class="user-list-item">
                                                    <div class="user-list-item__wrapper">
                                                        <div class="avatar avatar-circle ml-0">
                                                            <img src="img/ellipse2.png"
                                                                class="rounded-circle wh-46 d-flex bg-opacity-primary"
                                                                alt="image">
                                                            <div class="badge-direction-bottom">
                                                                <span class="chat-badge-dot avatar-online"></span>
                                                            </div>
                                                        </div>
                                                        <div class="users-list-body">
                                                            <div class="users-list-body-title">
                                                                <h6>Meyri Carles</h6>
                                                                <div class="text-limit" data-maxlength="10">
                                                                    <p class="mb-0"><span>Lorem ipsum dolor us was they
                                                                            amet</span>...</p>
                                                                </div>
                                                            </div>
                                                            <div class="last-chat-time unread">
                                                                <small>14:45 pm</small>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>





                                                <li class="user-list-item">
                                                    <div class="user-list-item__wrapper">
                                                        <div class="avatar avatar-circle ml-0">
                                                            <img src="img/ellipse15.png"
                                                                class="rounded-circle wh-46 d-flex bg-opacity-primary"
                                                                alt="image">
                                                            <div class="badge-direction-bottom">
                                                                <span class="chat-badge-dot avatar-online"></span>
                                                            </div>
                                                        </div>
                                                        <div class="users-list-body">
                                                            <div class="users-list-body-title">
                                                                <h6>Meyri Carles</h6>
                                                                <div class="text-limit" data-maxlength="10">
                                                                    <p class="mb-0"><span>Lorem ipsum dolor us was they
                                                                            amet</span>...</p>
                                                                </div>
                                                            </div>
                                                            <div class="last-chat-time unread">
                                                                <small>14:45 pm</small>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- Ends: .search-body -->
                            </div><!-- Ends: .chat-wrapper -->
                        </div>
                    </div><!-- Ends: .sidebar group -->
                </div><!-- Ends: .mb-lg-0 -->
                <div class="tab-content" id="ueberTabB">
                    <div class="tab-pane fade active show" id="panel_b_first" role="tabpanel"
                        aria-labelledby="first-tab">
                        <div class="chat">
                            <div class="chat-body bg-white radius-xl">
                                <div class="chat-header">
                                    <div class="media chat-name align-items-center">
                                        <div class="media-body align-self-center ">
                                            <h5 class=" mb-0 fw-500 mb-2">Domnic Harys</h5>
                                            <div class="media-body__content d-flex align-items-center">
                                                <span class="badge-dot dot-success mr-1"></span>
                                                <small class="d-flex color-light fs-12 text-capitalize">
                                                    active now
                                                </small>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- Chat Options -->
                                    <ul class="nav flex-nowrap">
                                        <li class="nav-item list-inline-item mr-0">
                                            <div class="dropdown">
                                                <a href="#" role="button" title="Details" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-more-vertical">
                                                        <circle cx="12" cy="12" r="1"></circle>
                                                        <circle cx="12" cy="5" r="1"></circle>
                                                        <circle cx="12" cy="19" r="1"></circle>
                                                    </svg>
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-right" style="">
                                                    <a class="dropdown-item align-items-center d-flex" href="#"
                                                        data-chat-info-toggle="">
                                                        <!-- Default :: Inline SVG -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-users">
                                                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                                            <circle cx="9" cy="7" r="4"></circle>
                                                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                                        </svg>
                                                        <span>Create new group</span>
                                                    </a>

                                                    <a class="dropdown-item align-items-center d-flex" href="#">
                                                        <!-- Default :: Inline SVG -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-trash-2">
                                                            <polyline points="3 6 5 6 21 6"></polyline>
                                                            <path
                                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                            </path>
                                                            <line x1="10" y1="11" x2="10"
                                                                y2="17"></line>
                                                            <line x1="14" y1="11" x2="14"
                                                                y2="17"></line>
                                                        </svg>

                                                        <span>Delete conversation</span>
                                                    </a>
                                                    <a class="dropdown-item align-items-center d-flex" href="#">
                                                        <!-- Default :: Inline SVG -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-x-octagon">
                                                            <polygon
                                                                points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2">
                                                            </polygon>
                                                            <line x1="15" y1="9" x2="9"
                                                                y2="15"></line>
                                                            <line x1="9" y1="9" x2="15"
                                                                y2="15"></line>
                                                        </svg>

                                                        <span>Block &amp; report</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                                <div class="chat-box p-xl-30 pl-lg-20 pr-lg-0">
                                    <!-- Start: Incomming -->
                                    <div class="flex-1 incoming-chat">
                                        <div class="chat-text-box">
                                            <div class="media ">
                                                <div class="chat-text-box__photo ">
                                                    <img src="img/author/1.jpg" class="align-self-start mr-15 wh-46"
                                                        alt="img">
                                                </div>
                                                <div class="media-body">
                                                    <div class="chat-text-box__content">
                                                        <div class="chat-text-box__title d-flex align-items-center">
                                                            <h6 class="fs-14">Domnic Harys</h6>
                                                            <span
                                                                class="chat-text-box__time fs-12 color-light fw-400 ml-15">8:30
                                                                PM</span>
                                                        </div>
                                                        <div class="d-flex align-items-center mb-20 mt-10">
                                                            <div class="chat-text-box__subtitle p-20 bg-primary">
                                                                <p class="color-white">Jam nonumy eirmod tempor invidunt ut
                                                                    labore
                                                                    et dolore magna aliquyam erat consetetur sadipscing
                                                                    elitr
                                                                    sed
                                                                    diam nonumy eirmod tempor invidunt ut labore et dolore
                                                                    magna
                                                                    aliquyam erat sed diam voluptua..</p>
                                                            </div>
                                                            <div class="chat-text-box__other d-flex">
                                                                <div class="chat-text-box__reaction px-sm-15 px-2">

                                                                    <div class="emotions">
                                                                        <div class="dropdown  dropdown-click ">
                                                                            <button
                                                                                class="btn-link border-0 bg-transparent p-0"
                                                                                data-toggle="dropdown"
                                                                                aria-haspopup="true"
                                                                                aria-expanded="false">
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    stroke="currentColor"
                                                                                    stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    class="feather feather-smile">
                                                                                    <circle cx="12"
                                                                                        cy="12" r="10"></circle>
                                                                                    <path d="M8 14s1.5 2 4 2 4-2 4-2">
                                                                                    </path>
                                                                                    <line x1="9" y1="9"
                                                                                        x2="9.01" y2="9">
                                                                                    </line>
                                                                                    <line x1="15" y1="9"
                                                                                        x2="15.01" y2="9">
                                                                                    </line>
                                                                                </svg> </button>
                                                                            <div
                                                                                class="dropdown-default dropdown-bottomRight dropdown-menu-right dropdown-menu">
                                                                                <ul class="emotions__parent d-flex">
                                                                                    <li>
                                                                                        <a class=""
                                                                                            href="#">
                                                                                            <img src="img/svg/cool.png"
                                                                                                alt="emotions">
                                                                                        </a>
                                                                                    </li>
                                                                                    <li><a class=""
                                                                                            href="#">
                                                                                            <img src="img/svg/happy2.png"
                                                                                                alt="emotions">
                                                                                        </a></li>
                                                                                    <li><a class=""
                                                                                            href="#">
                                                                                            <img src="img/svg/happy.png"
                                                                                                alt="emotions">
                                                                                        </a></li>
                                                                                    <li><a class=""
                                                                                            href="#">
                                                                                            <img src="img/svg/shocked.png"
                                                                                                alt="emotions">
                                                                                        </a></li>
                                                                                    <li><a class=""
                                                                                            href="#">
                                                                                            <img src="img/svg/like.png"
                                                                                                alt="emotions">
                                                                                        </a></li>
                                                                                    <li><a class=""
                                                                                            href="#">
                                                                                            <img src="img/svg/heart.png"
                                                                                                alt="emotions">
                                                                                        </a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                                <div class="dropdown dropdown-click">
                                                                    <button class="btn-link border-0 bg-transparent p-0"
                                                                        data-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-more-horizontal">
                                                                            <circle cx="12" cy="12" r="1">
                                                                            </circle>
                                                                            <circle cx="19" cy="12" r="1">
                                                                            </circle>
                                                                            <circle cx="5" cy="12" r="1">
                                                                            </circle>
                                                                        </svg>
                                                                    </button>
                                                                    <div class="dropdown-default dropdown-bottomRight dropdown-menu-right dropdown-menu"
                                                                        style="">
                                                                        <a class="dropdown-item" href="#">Copy</a>
                                                                        <a class="dropdown-item"
                                                                            href="#">Quote</a>
                                                                        <a class="dropdown-item"
                                                                            href="#">Forward</a>
                                                                        <a class="dropdown-item"
                                                                            href="#">Report</a>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End: Incomming -->
                                    <p class="social-connector text-center text-capitalize">
                                        <span>today</span>
                                    </p>
                                    <!-- Start: Outgoing -->
                                    <div class="flex-1 justify-content-end d-flex outgoing-chat mt-20">
                                        <div class="chat-text-box">
                                            <div class="media ">
                                                <div class="media-body">
                                                    <div class="chat-text-box__content">
                                                        <div
                                                            class="chat-text-box__title d-flex align-items-center justify-content-end mb-2">
                                                            <span
                                                                class="chat-text-box__time fs-12 color-light fw-400">8:30
                                                                PM</span>
                                                        </div>
                                                        <div class="d-flex align-items-center justify-content-end">
                                                            <div class="chat-text-box__other d-flex">
                                                                <div class="px-15">

                                                                    <div class="dropdown dropdown-click">
                                                                        <button
                                                                            class="btn-link border-0 bg-transparent p-0"
                                                                            data-toggle="dropdown" aria-haspopup="true"
                                                                            aria-expanded="false">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-more-horizontal">
                                                                                <circle cx="12" cy="12"
                                                                                    r="1"></circle>
                                                                                <circle cx="19" cy="12"
                                                                                    r="1"></circle>
                                                                                <circle cx="5" cy="12"
                                                                                    r="1"></circle>
                                                                            </svg>
                                                                        </button>
                                                                        <div class="dropdown-default dropdown-bottomRight dropdown-menu-right dropdown-menu"
                                                                            style="">
                                                                            <a class="dropdown-item"
                                                                                href="#">Copy</a>
                                                                            <a class="dropdown-item"
                                                                                href="#">Quote</a>
                                                                            <a class="dropdown-item"
                                                                                href="#">Forward</a>
                                                                            <a class="dropdown-item"
                                                                                href="#">Report</a>
                                                                            <a class="dropdown-item"
                                                                                href="#">remove</a>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="chat-text-box__subtitle p-20 bg-deep">
                                                                <p class="color-gray">Jam nonumy eirmod tempor invidunt ut
                                                                    labore
                                                                    et dolore magna aliquyam erat consetetur sadipscing
                                                                    elitr
                                                                    sed
                                                                    diam nonumy eirmod tempor invidunt ut labore et dolore
                                                                    magna
                                                                    aliquyam erat sed diam voluptua..</p>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-1 justify-content-end d-flex outgoing-chat">
                                        <div class="chat-text-box">
                                            <div class="media ">
                                                <div class="media-body">
                                                    <div class="chat-text-box__content">
                                                        <div class="d-flex align-items-center justify-content-end">
                                                            <div class="chat-text-box__other d-flex">
                                                                <div class="px-15">

                                                                    <div class="dropdown dropdown-click">
                                                                        <button
                                                                            class="btn-link border-0 bg-transparent p-0"
                                                                            data-toggle="dropdown" aria-haspopup="true"
                                                                            aria-expanded="false">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-more-horizontal">
                                                                                <circle cx="12" cy="12"
                                                                                    r="1"></circle>
                                                                                <circle cx="19" cy="12"
                                                                                    r="1"></circle>
                                                                                <circle cx="5" cy="12"
                                                                                    r="1"></circle>
                                                                            </svg>
                                                                        </button>
                                                                        <div class="dropdown-default dropdown-bottomRight dropdown-menu-right dropdown-menu"
                                                                            style="">
                                                                            <a class="dropdown-item"
                                                                                href="#">Copy</a>
                                                                            <a class="dropdown-item"
                                                                                href="#">Quote</a>
                                                                            <a class="dropdown-item"
                                                                                href="#">Forward</a>
                                                                            <a class="dropdown-item"
                                                                                href="#">Report</a>
                                                                            <a class="dropdown-item"
                                                                                href="#">remove</a>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="chat-text-box__subtitle p-20 bg-deep">
                                                                <p class="color-gray">Jam nonumy eirmod tempor invidunt ut
                                                                    labore et
                                                                    dolore magna.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End: Outgoing  -->
                                    <!-- Start: Incomming -->
                                    <div class="flex-1 incoming-chat mt-30">
                                        <div class="chat-text-box">
                                            <div class="media ">
                                                <div class="chat-text-box__photo ">
                                                    <img src="img/author/1.jpg" class="align-self-start mr-15 wh-46"
                                                        alt="img">
                                                </div>
                                                <div class="media-body">
                                                    <div class="chat-text-box__content">
                                                        <div class="chat-text-box__title d-flex align-items-center">
                                                            <h6 class="fs-14">Domnic Harys</h6>
                                                            <span
                                                                class="chat-text-box__time fs-12 color-light fw-400 ml-15">8:30
                                                                PM</span>
                                                        </div>
                                                        <div class="d-flex align-items-center mb-20 mt-10">
                                                            <div class="chat-text-box__subtitle p-20 bg-primary">
                                                                <p class="color-white">Jam nonumy eirmod tempor invidunt
                                                                    ut
                                                                    labore
                                                                    et dolore magna.</p>
                                                            </div>
                                                            <div class="chat-text-box__other d-flex">
                                                                <div class="chat-text-box__reaction px-sm-15 px-2">

                                                                    <div class="emotions">
                                                                        <div class="dropdown  dropdown-click ">
                                                                            <button
                                                                                class="btn-link border-0 bg-transparent p-0"
                                                                                data-toggle="dropdown"
                                                                                aria-haspopup="true"
                                                                                aria-expanded="false">
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    stroke="currentColor"
                                                                                    stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    class="feather feather-smile">
                                                                                    <circle cx="12"
                                                                                        cy="12" r="10"></circle>
                                                                                    <path d="M8 14s1.5 2 4 2 4-2 4-2">
                                                                                    </path>
                                                                                    <line x1="9" y1="9"
                                                                                        x2="9.01" y2="9">
                                                                                    </line>
                                                                                    <line x1="15" y1="9"
                                                                                        x2="15.01" y2="9">
                                                                                    </line>
                                                                                </svg> </button>
                                                                            <div
                                                                                class="dropdown-default dropdown-bottomRight dropdown-menu-right dropdown-menu">
                                                                                <ul class="emotions__parent d-flex">
                                                                                    <li>
                                                                                        <a class=""
                                                                                            href="#">
                                                                                            <img src="img/svg/cool.png"
                                                                                                alt="emotions">
                                                                                        </a>
                                                                                    </li>
                                                                                    <li><a class=""
                                                                                            href="#">
                                                                                            <img src="img/svg/happy2.png"
                                                                                                alt="emotions">
                                                                                        </a></li>
                                                                                    <li><a class=""
                                                                                            href="#">
                                                                                            <img src="img/svg/happy.png"
                                                                                                alt="emotions">
                                                                                        </a></li>
                                                                                    <li><a class=""
                                                                                            href="#">
                                                                                            <img src="img/svg/shocked.png"
                                                                                                alt="emotions">
                                                                                        </a></li>
                                                                                    <li><a class=""
                                                                                            href="#">
                                                                                            <img src="img/svg/like.png"
                                                                                                alt="emotions">
                                                                                        </a></li>
                                                                                    <li><a class=""
                                                                                            href="#">
                                                                                            <img src="img/svg/heart.png"
                                                                                                alt="emotions">
                                                                                        </a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                                <div class="dropdown dropdown-click">
                                                                    <button class="btn-link border-0 bg-transparent p-0"
                                                                        data-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-more-horizontal">
                                                                            <circle cx="12" cy="12" r="1">
                                                                            </circle>
                                                                            <circle cx="19" cy="12" r="1">
                                                                            </circle>
                                                                            <circle cx="5" cy="12" r="1">
                                                                            </circle>
                                                                        </svg>
                                                                    </button>
                                                                    <div class="dropdown-default dropdown-bottomRight dropdown-menu-right dropdown-menu"
                                                                        style="">
                                                                        <a class="dropdown-item" href="#">Copy</a>
                                                                        <a class="dropdown-item"
                                                                            href="#">Quote</a>
                                                                        <a class="dropdown-item"
                                                                            href="#">Forward</a>
                                                                        <a class="dropdown-item"
                                                                            href="#">Report</a>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End: Incomming -->
                                    <!-- Start: Outgoing -->
                                    <div class="flex-1 justify-content-end d-flex outgoing-chat">
                                        <div class="chat-text-box">
                                            <div class="media ">
                                                <div class="media-body">
                                                    <div class="chat-text-box__content">
                                                        <div
                                                            class="chat-text-box__title d-flex align-items-center justify-content-end mb-2">
                                                            <span
                                                                class="chat-text-box__time fs-12 color-light fw-400">8:30
                                                                PM</span>
                                                        </div>
                                                        <div class="d-flex align-items-center justify-content-end">
                                                            <div class="chat-text-box__other d-flex">
                                                                <div class="px-15">

                                                                    <div class="dropdown dropdown-click">
                                                                        <button
                                                                            class="btn-link border-0 bg-transparent p-0"
                                                                            data-toggle="dropdown" aria-haspopup="true"
                                                                            aria-expanded="false">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-more-horizontal">
                                                                                <circle cx="12" cy="12"
                                                                                    r="1"></circle>
                                                                                <circle cx="19" cy="12"
                                                                                    r="1"></circle>
                                                                                <circle cx="5" cy="12"
                                                                                    r="1"></circle>
                                                                            </svg>
                                                                        </button>
                                                                        <div class="dropdown-default dropdown-bottomRight dropdown-menu-right dropdown-menu"
                                                                            style="">
                                                                            <a class="dropdown-item"
                                                                                href="#">Copy</a>
                                                                            <a class="dropdown-item"
                                                                                href="#">Quote</a>
                                                                            <a class="dropdown-item"
                                                                                href="#">Forward</a>
                                                                            <a class="dropdown-item"
                                                                                href="#">Report</a>
                                                                            <a class="dropdown-item"
                                                                                href="#">remove</a>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="chat-text-box__subtitle p-20 bg-deep">
                                                                <p class="color-gray">Jam nonumy eirmod tempor invidunt ut
                                                                    labore et
                                                                    dolore magna.</p>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="seen-chat d-flex align-items-center  justify-content-end mb-2 mt-10">
                                                            <div
                                                                class="chat-text-box__title d-flex align-items-center mr-10 ">
                                                                <span
                                                                    class="chat-text-box__time fs-12 color-light fw-400">Seen
                                                                    9:20
                                                                    PM</span>
                                                            </div>
                                                            <img src="img/author/1.jpg" alt="img"
                                                                class="wh-20 rounded-circle">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End: Outgoing  -->
                                    <!-- Start: Incomming -->
                                    <div class="flex-1 incoming-chat mt-30">
                                        <div class="chat-text-box">
                                            <div class="media ">
                                                <div class="chat-text-box__photo ">
                                                    <img src="img/author/1.jpg" class="align-self-start mr-15 wh-46"
                                                        alt="img">
                                                </div>
                                                <div class="media-body">
                                                    <div class="chat-text-box__content">
                                                        <div class="d-flex align-items-center ">
                                                            <div class="chat-text-box__subtitle typing cbg-light pr-30">
                                                                <p class="color-light text-capitalize">typing...</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End: Incomming -->
                                </div>
                                <div class="chat-footer px-xl-30 px-lg-20 pb-lg-30 pt-1">
                                    <div class="chat-type-text">
                                        <div class="pt-0 outline-0 pb-0 pr-0 pl-0 rounded-0 position-relative d-flex align-items-center"
                                            tabindex="-1">
                                            <div
                                                class="d-flex justify-content-between align-items-center w-100 flex-wrap">
                                                <div class=" flex-1 d-flex align-items-center chat-type-text__write ml-0">
                                                    <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-smile">
                                                            <circle cx="12" cy="12" r="10"></circle>
                                                            <path d="M8 14s1.5 2 4 2 4-2 4-2"></path>
                                                            <line x1="9" y1="9" x2="9.01"
                                                                y2="9"></line>
                                                            <line x1="15" y1="9" x2="15.01"
                                                                y2="9"></line>
                                                        </svg></a>
                                                    <input class="form-control border-0 bg-transparent box-shadow-none"
                                                        placeholder="Type your message...">

                                                </div>
                                                <div class="chat-type-text__btn">
                                                    <button type="button"
                                                        class="border-0 btn-deep color-light wh-50 p-10 rounded-circle">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-image">
                                                            <rect x="3" y="3" width="18" height="18"
                                                                rx="2" ry="2"></rect>
                                                            <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                                            <polyline points="21 15 16 10 5 21"></polyline>
                                                        </svg></button>
                                                    <button type="button"
                                                        class="border-0 btn-deep color-light wh-50 p-10 rounded-circle">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-paperclip">
                                                            <path
                                                                d="M21.44 11.05l-9.19 9.19a6 6 0 0 1-8.49-8.49l9.19-9.19a4 4 0 0 1 5.66 5.66l-9.2 9.19a2 2 0 0 1-2.83-2.83l8.49-8.48">
                                                            </path>
                                                        </svg></button>
                                                    <button type="button"
                                                        class="border-0 btn-primary wh-50 p-10 rounded-circle">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-send">
                                                            <line x1="22" y1="2" x2="11"
                                                                y2="13"></line>
                                                            <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                                                        </svg></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- ends: .chat-->
                    </div>
                    <div class="tab-pane fade" id="panel_b_second" role="tabpanel" aria-labelledby="second-tab">
                        <div class="chat">
                            <div class="chat-body bg-white radius-xl">
                                <div class="chat-header bg-white">
                                    <div class="media chat-name align-items-center">
                                        <div class="media-body align-self-center ">
                                            <h5 class=" mb-0 fw-500 text-uppercase">ui/ux group</h5>
                                        </div>
                                    </div>
                                    <div class="image-group">
                                        <ul class="d-flex">
                                            <li>
                                                <img src="img/author/1.jpg" alt="img"
                                                    class="wh-30 rounded-circle">
                                            </li>
                                            <li>
                                                <img src="img/author/1.jpg" alt="img"
                                                    class="wh-30 rounded-circle">
                                            </li>
                                            <li>
                                                <img src="img/author/1.jpg" alt="img"
                                                    class="wh-30 rounded-circle">
                                            </li>
                                            <li>
                                                <img src="img/author/1.jpg" alt="img"
                                                    class="wh-30 rounded-circle">
                                            </li>
                                            <li>
                                                <img src="img/author/1.jpg" alt="img"
                                                    class="wh-30 rounded-circle">
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="bg-primary rounded-circle wh-30 color-white content-center fs-10 fw-500">20+</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="border rounded-circle wh-30 color-extra-light content-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-plus">
                                                        <line x1="12" y1="5" x2="12"
                                                            y2="19"></line>
                                                        <line x1="5" y1="12" x2="19"
                                                            y2="12"></line>
                                                    </svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Chat Options -->
                                    <ul class="nav flex-nowrap">
                                        <li class="nav-item list-inline-item d-none d-sm-block mr-0">
                                            <div class="dropdown">
                                                <a href="#" role="button" title="Details"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-more-vertical">
                                                        <circle cx="12" cy="12" r="1"></circle>
                                                        <circle cx="12" cy="5" r="1"></circle>
                                                        <circle cx="12" cy="19" r="1"></circle>
                                                    </svg>
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item align-items-center d-flex" href="#"
                                                        data-chat-info-toggle="">
                                                        <!-- Default :: Inline SVG -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-users">
                                                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                                            <circle cx="9" cy="7" r="4"></circle>
                                                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                                        </svg>
                                                        <span>Create new group</span>
                                                    </a>

                                                    <a class="dropdown-item align-items-center d-flex" href="#">
                                                        <!-- Default :: Inline SVG -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-trash-2">
                                                            <polyline points="3 6 5 6 21 6"></polyline>
                                                            <path
                                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                            </path>
                                                            <line x1="10" y1="11" x2="10"
                                                                y2="17"></line>
                                                            <line x1="14" y1="11" x2="14"
                                                                y2="17"></line>
                                                        </svg>

                                                        <span>Delete conversation</span>
                                                    </a>
                                                    <a class="dropdown-item align-items-center d-flex" href="#">
                                                        <!-- Default :: Inline SVG -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-x-octagon">
                                                            <polygon
                                                                points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2">
                                                            </polygon>
                                                            <line x1="15" y1="9" x2="9"
                                                                y2="15"></line>
                                                            <line x1="9" y1="9" x2="15"
                                                                y2="15"></line>
                                                        </svg>

                                                        <span>Block &amp; report</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                                <div class="chat-box p-xl-30 pl-lg-20 pr-lg-0">
                                    <!-- Start: Incomming -->
                                    <div class="flex-1 incoming-chat">
                                        <div class="chat-text-box">
                                            <div class="media ">
                                                <div class="chat-text-box__photo ">
                                                    <img src="img/author/1.jpg" class="align-self-start mr-15 wh-46"
                                                        alt="img">
                                                </div>
                                                <div class="media-body">
                                                    <div class="chat-text-box__content">
                                                        <div class="chat-text-box__title d-flex align-items-center">
                                                            <h6 class="fs-14">Domnic Harys</h6>
                                                            <span
                                                                class="chat-text-box__time fs-12 color-light fw-400 ml-15">8:30
                                                                PM</span>
                                                        </div>
                                                        <div class="d-flex align-items-center mb-20 mt-10">
                                                            <div class="chat-text-box__subtitle p-20 bg-primary">
                                                                <p class="color-white">Jam nonumy eirmod tempor invidunt
                                                                    ut
                                                                    labore
                                                                    et dolore magna aliquyam erat consetetur sadipscing
                                                                    elitr
                                                                    sed
                                                                    diam nonumy eirmod tempor invidunt ut labore et dolore
                                                                    magna
                                                                    aliquyam erat sed diam voluptua..</p>
                                                            </div>
                                                            <div class="chat-text-box__other d-flex">
                                                                <div class="chat-text-box__reaction px-sm-15 px-2">

                                                                    <div class="emotions">
                                                                        <div class="dropdown  dropdown-click ">
                                                                            <button
                                                                                class="btn-link border-0 bg-transparent p-0"
                                                                                data-toggle="dropdown"
                                                                                aria-haspopup="true"
                                                                                aria-expanded="false">
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    stroke="currentColor"
                                                                                    stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    class="feather feather-smile">
                                                                                    <circle cx="12"
                                                                                        cy="12" r="10"></circle>
                                                                                    <path d="M8 14s1.5 2 4 2 4-2 4-2">
                                                                                    </path>
                                                                                    <line x1="9" y1="9"
                                                                                        x2="9.01" y2="9">
                                                                                    </line>
                                                                                    <line x1="15" y1="9"
                                                                                        x2="15.01" y2="9">
                                                                                    </line>
                                                                                </svg> </button>
                                                                            <div
                                                                                class="dropdown-default dropdown-bottomRight dropdown-menu-right dropdown-menu">
                                                                                <ul class="emotions__parent d-flex">
                                                                                    <li>
                                                                                        <a class=""
                                                                                            href="#">
                                                                                            <img src="img/svg/cool.png"
                                                                                                alt="emotions">
                                                                                        </a>
                                                                                    </li>
                                                                                    <li><a class=""
                                                                                            href="#">
                                                                                            <img src="img/svg/happy2.png"
                                                                                                alt="emotions">
                                                                                        </a></li>
                                                                                    <li><a class=""
                                                                                            href="#">
                                                                                            <img src="img/svg/happy.png"
                                                                                                alt="emotions">
                                                                                        </a></li>
                                                                                    <li><a class=""
                                                                                            href="#">
                                                                                            <img src="img/svg/shocked.png"
                                                                                                alt="emotions">
                                                                                        </a></li>
                                                                                    <li><a class=""
                                                                                            href="#">
                                                                                            <img src="img/svg/like.png"
                                                                                                alt="emotions">
                                                                                        </a></li>
                                                                                    <li><a class=""
                                                                                            href="#">
                                                                                            <img src="img/svg/heart.png"
                                                                                                alt="emotions">
                                                                                        </a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                                <div class="dropdown dropdown-click">
                                                                    <button class="btn-link border-0 bg-transparent p-0"
                                                                        data-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-more-horizontal">
                                                                            <circle cx="12" cy="12" r="1">
                                                                            </circle>
                                                                            <circle cx="19" cy="12" r="1">
                                                                            </circle>
                                                                            <circle cx="5" cy="12" r="1">
                                                                            </circle>
                                                                        </svg>
                                                                    </button>
                                                                    <div class="dropdown-default dropdown-bottomRight dropdown-menu-right dropdown-menu"
                                                                        style="">
                                                                        <a class="dropdown-item" href="#">Copy</a>
                                                                        <a class="dropdown-item"
                                                                            href="#">Quote</a>
                                                                        <a class="dropdown-item"
                                                                            href="#">Forward</a>
                                                                        <a class="dropdown-item"
                                                                            href="#">Report</a>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End: Incomming -->
                                    <p class="social-connector text-center text-capitalize">
                                        <span>today</span>
                                    </p>
                                    <!-- Start: Outgoing -->
                                    <div class="flex-1 justify-content-end d-flex outgoing-chat mt-20">
                                        <div class="chat-text-box">
                                            <div class="media ">
                                                <div class="media-body">
                                                    <div class="chat-text-box__content">
                                                        <div
                                                            class="chat-text-box__title d-flex align-items-center justify-content-end mb-2">
                                                            <span
                                                                class="chat-text-box__time fs-12 color-light fw-400">8:30
                                                                PM</span>
                                                        </div>
                                                        <div class="d-flex align-items-center justify-content-end">
                                                            <div class="chat-text-box__other d-flex">
                                                                <div class="px-15">

                                                                    <div class="dropdown dropdown-click">
                                                                        <button
                                                                            class="btn-link border-0 bg-transparent p-0"
                                                                            data-toggle="dropdown" aria-haspopup="true"
                                                                            aria-expanded="false">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-more-horizontal">
                                                                                <circle cx="12" cy="12"
                                                                                    r="1"></circle>
                                                                                <circle cx="19" cy="12"
                                                                                    r="1"></circle>
                                                                                <circle cx="5" cy="12"
                                                                                    r="1"></circle>
                                                                            </svg>
                                                                        </button>
                                                                        <div class="dropdown-default dropdown-bottomRight dropdown-menu-right dropdown-menu"
                                                                            style="">
                                                                            <a class="dropdown-item"
                                                                                href="#">Copy</a>
                                                                            <a class="dropdown-item"
                                                                                href="#">Quote</a>
                                                                            <a class="dropdown-item"
                                                                                href="#">Forward</a>
                                                                            <a class="dropdown-item"
                                                                                href="#">Report</a>
                                                                            <a class="dropdown-item"
                                                                                href="#">remove</a>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="chat-text-box__subtitle p-20 bg-deep">
                                                                <p class="color-gray">Jam nonumy eirmod tempor invidunt ut
                                                                    labore
                                                                    et dolore magna aliquyam erat consetetur sadipscing
                                                                    elitr
                                                                    sed
                                                                    diam nonumy eirmod tempor invidunt ut labore et dolore
                                                                    magna
                                                                    aliquyam erat sed diam voluptua..</p>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-1 justify-content-end d-flex outgoing-chat">
                                        <div class="chat-text-box">
                                            <div class="media ">
                                                <div class="media-body">
                                                    <div class="chat-text-box__content">
                                                        <div class="d-flex align-items-center justify-content-end">
                                                            <div class="chat-text-box__other d-flex">
                                                                <div class="px-15">

                                                                    <div class="dropdown dropdown-click">
                                                                        <button
                                                                            class="btn-link border-0 bg-transparent p-0"
                                                                            data-toggle="dropdown" aria-haspopup="true"
                                                                            aria-expanded="false">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-more-horizontal">
                                                                                <circle cx="12" cy="12"
                                                                                    r="1"></circle>
                                                                                <circle cx="19" cy="12"
                                                                                    r="1"></circle>
                                                                                <circle cx="5" cy="12"
                                                                                    r="1"></circle>
                                                                            </svg>
                                                                        </button>
                                                                        <div class="dropdown-default dropdown-bottomRight dropdown-menu-right dropdown-menu"
                                                                            style="">
                                                                            <a class="dropdown-item"
                                                                                href="#">Copy</a>
                                                                            <a class="dropdown-item"
                                                                                href="#">Quote</a>
                                                                            <a class="dropdown-item"
                                                                                href="#">Forward</a>
                                                                            <a class="dropdown-item"
                                                                                href="#">Report</a>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="chat-text-box__subtitle p-20 bg-deep">
                                                                <p class="color-gray">Jam nonumy eirmod tempor invidunt ut
                                                                    labore et
                                                                    dolore magna.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End: Outgoing  -->
                                    <!-- Start: Incomming -->
                                    <div class="flex-1 incoming-chat mt-30">
                                        <div class="chat-text-box">
                                            <div class="media ">
                                                <div class="chat-text-box__photo ">
                                                    <img src="img/author/1.jpg" class="align-self-start mr-15 wh-46"
                                                        alt="img">
                                                </div>
                                                <div class="media-body">
                                                    <div class="chat-text-box__content">
                                                        <div class="chat-text-box__title d-flex align-items-center">
                                                            <h6 class="fs-14">Domnic Harys</h6>
                                                            <span
                                                                class="chat-text-box__time fs-12 color-light fw-400 ml-15">8:30
                                                                PM</span>
                                                        </div>
                                                        <div class="d-flex align-items-center mb-20 mt-10">
                                                            <div class="chat-text-box__subtitle p-20 bg-primary">
                                                                <p class="color-white">Jam nonumy eirmod tempor invidunt
                                                                    ut
                                                                    labore
                                                                    et dolore magna.</p>
                                                            </div>
                                                            <div class="chat-text-box__other d-flex">
                                                                <div class="chat-text-box__reaction px-sm-15 px-2">

                                                                    <div class="emotions">
                                                                        <div class="dropdown  dropdown-click ">
                                                                            <button
                                                                                class="btn-link border-0 bg-transparent p-0"
                                                                                data-toggle="dropdown"
                                                                                aria-haspopup="true"
                                                                                aria-expanded="false">
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    stroke="currentColor"
                                                                                    stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    class="feather feather-smile">
                                                                                    <circle cx="12"
                                                                                        cy="12" r="10"></circle>
                                                                                    <path d="M8 14s1.5 2 4 2 4-2 4-2">
                                                                                    </path>
                                                                                    <line x1="9" y1="9"
                                                                                        x2="9.01" y2="9">
                                                                                    </line>
                                                                                    <line x1="15" y1="9"
                                                                                        x2="15.01" y2="9">
                                                                                    </line>
                                                                                </svg> </button>
                                                                            <div
                                                                                class="dropdown-default dropdown-bottomRight dropdown-menu-right dropdown-menu">
                                                                                <ul class="emotions__parent d-flex">
                                                                                    <li>
                                                                                        <a class=""
                                                                                            href="#">
                                                                                            <img src="img/svg/cool.png"
                                                                                                alt="emotions">
                                                                                        </a>
                                                                                    </li>
                                                                                    <li><a class=""
                                                                                            href="#">
                                                                                            <img src="img/svg/happy2.png"
                                                                                                alt="emotions">
                                                                                        </a></li>
                                                                                    <li><a class=""
                                                                                            href="#">
                                                                                            <img src="img/svg/happy.png"
                                                                                                alt="emotions">
                                                                                        </a></li>
                                                                                    <li><a class=""
                                                                                            href="#">
                                                                                            <img src="img/svg/shocked.png"
                                                                                                alt="emotions">
                                                                                        </a></li>
                                                                                    <li><a class=""
                                                                                            href="#">
                                                                                            <img src="img/svg/like.png"
                                                                                                alt="emotions">
                                                                                        </a></li>
                                                                                    <li><a class=""
                                                                                            href="#">
                                                                                            <img src="img/svg/heart.png"
                                                                                                alt="emotions">
                                                                                        </a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                                <div class="dropdown dropdown-click">
                                                                    <button class="btn-link border-0 bg-transparent p-0"
                                                                        data-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-more-horizontal">
                                                                            <circle cx="12" cy="12" r="1">
                                                                            </circle>
                                                                            <circle cx="19" cy="12" r="1">
                                                                            </circle>
                                                                            <circle cx="5" cy="12" r="1">
                                                                            </circle>
                                                                        </svg>
                                                                    </button>
                                                                    <div class="dropdown-default dropdown-bottomRight dropdown-menu-right dropdown-menu"
                                                                        style="">
                                                                        <a class="dropdown-item" href="#">Copy</a>
                                                                        <a class="dropdown-item"
                                                                            href="#">Quote</a>
                                                                        <a class="dropdown-item"
                                                                            href="#">Forward</a>
                                                                        <a class="dropdown-item"
                                                                            href="#">Report</a>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End: Incomming -->
                                    <!-- Start: Outgoing -->
                                    <div class="flex-1 justify-content-end d-flex outgoing-chat">
                                        <div class="chat-text-box">
                                            <div class="media ">
                                                <div class="media-body">
                                                    <div class="chat-text-box__content">
                                                        <div
                                                            class="chat-text-box__title d-flex align-items-center justify-content-end mb-2">
                                                            <span
                                                                class="chat-text-box__time fs-12 color-light fw-400">8:30
                                                                PM</span>
                                                        </div>
                                                        <div class="d-flex align-items-center justify-content-end">
                                                            <div class="chat-text-box__other d-flex">
                                                                <div class="px-15">

                                                                    <div class="dropdown dropdown-click">
                                                                        <button
                                                                            class="btn-link border-0 bg-transparent p-0"
                                                                            data-toggle="dropdown" aria-haspopup="true"
                                                                            aria-expanded="false">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-more-horizontal">
                                                                                <circle cx="12" cy="12"
                                                                                    r="1"></circle>
                                                                                <circle cx="19" cy="12"
                                                                                    r="1"></circle>
                                                                                <circle cx="5" cy="12"
                                                                                    r="1"></circle>
                                                                            </svg>
                                                                        </button>
                                                                        <div class="dropdown-default dropdown-bottomRight dropdown-menu-right dropdown-menu"
                                                                            style="">
                                                                            <a class="dropdown-item"
                                                                                href="#">Copy</a>
                                                                            <a class="dropdown-item"
                                                                                href="#">Quote</a>
                                                                            <a class="dropdown-item"
                                                                                href="#">Forward</a>
                                                                            <a class="dropdown-item"
                                                                                href="#">Report</a>
                                                                            <a class="dropdown-item"
                                                                                href="#">remove</a>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="chat-text-box__subtitle p-20 bg-deep">
                                                                <p class="color-gray">Jam nonumy eirmod tempor invidunt ut
                                                                    labore et
                                                                    dolore magna.</p>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="seen-chat seen-chat-group  d-flex align-items-center  justify-content-end mb-2 mt-10">
                                                            <ul class="d-flex">
                                                                <li>
                                                                    <img src="img/author/1.jpg" alt="img"
                                                                        class="wh-20 rounded-circle">
                                                                </li>
                                                                <li>
                                                                    <img src="img/author/2.jpg" alt="img"
                                                                        class="wh-20 rounded-circle">
                                                                </li>
                                                                <li>
                                                                    <img src="img/author/3.jpg" alt="img"
                                                                        class="wh-20 rounded-circle">
                                                                </li>
                                                                <li>
                                                                    <img src="img/author/4.jpg" alt="img"
                                                                        class="wh-20 rounded-circle">
                                                                </li>
                                                                <li>
                                                                    <img src="img/author/1.jpg" alt="img"
                                                                        class="wh-20 rounded-circle">
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End: Outgoing  -->
                                    <!-- Start: Incomming -->
                                    <div class="flex-1 incoming-chat mt-30">
                                        <div class="chat-text-box">
                                            <div class="media ">
                                                <div class="chat-text-box__photo ">
                                                    <img src="img/author/1.jpg" class="align-self-start mr-15 wh-46"
                                                        alt="img">
                                                </div>
                                                <div class="media-body">
                                                    <div class="chat-text-box__content">
                                                        <div class="d-flex align-items-center ">
                                                            <div class="chat-text-box__subtitle typing cbg-light pr-30">
                                                                <p class="color-light text-capitalize">typing...</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End: Incomming -->
                                <div class="chat-footer px-xl-30 px-lg-20 pb-lg-30 pt-1">
                                    <div class="chat-type-text">
                                        <div class="pt-0 outline-0 pb-0 pr-0 pl-0 rounded-0 position-relative d-flex align-items-center"
                                            tabindex="-1">
                                            <div
                                                class="d-flex justify-content-between align-items-center w-100 flex-wrap">
                                                <div class=" flex-1 d-flex align-items-center chat-type-text__write ml-0">
                                                    <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-smile">
                                                            <circle cx="12" cy="12" r="10"></circle>
                                                            <path d="M8 14s1.5 2 4 2 4-2 4-2"></path>
                                                            <line x1="9" y1="9" x2="9.01"
                                                                y2="9"></line>
                                                            <line x1="15" y1="9" x2="15.01"
                                                                y2="9"></line>
                                                        </svg></a>
                                                    <input class="form-control border-0 bg-transparent"
                                                        placeholder="Type your message...">

                                                </div>
                                                <div class="chat-type-text__btn">
                                                    <button type="button"
                                                        class="border-0 btn-deep color-light wh-50 p-10 rounded-circle">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-image">
                                                            <rect x="3" y="3" width="18" height="18"
                                                                rx="2" ry="2"></rect>
                                                            <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                                            <polyline points="21 15 16 10 5 21"></polyline>
                                                        </svg></button>
                                                    <button type="button"
                                                        class="border-0 btn-deep color-light wh-50 p-10 rounded-circle">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-paperclip">
                                                            <path
                                                                d="M21.44 11.05l-9.19 9.19a6 6 0 0 1-8.49-8.49l9.19-9.19a4 4 0 0 1 5.66 5.66l-9.2 9.19a2 2 0 0 1-2.83-2.83l8.49-8.48">
                                                            </path>
                                                        </svg></button>
                                                    <button type="button"
                                                        class="border-0 btn-primary wh-50 p-10 rounded-circle">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-send">
                                                            <line x1="22" y1="2" x2="11"
                                                                y2="13"></line>
                                                            <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                                                        </svg></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- ends: .chat -->
                    </div>
                    <div class="tab-pane fade" id="panel_b_thrid" role="tabpanel" aria-labelledby="third-tab">
                        <div class="chat">
                            <div class="chat-body bg-white radius-xl">
                                <div class="chat-header bg-white">
                                    <div class="media chat-name align-items-center">
                                        <div class="media-body align-self-center ">
                                            <h5 class=" mb-0 fw-500 mb-2">Domnic Harys</h5>
                                            <div class="d-flex align-items-center">
                                                <span class="badge-dot dot-success mr-1"></span>
                                                <small class="d-flex color-light fs-12 text-capitalize">
                                                    active now
                                                </small>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- Chat Options -->
                                    <ul class="nav flex-nowrap">
                                        <li class="nav-item list-inline-item d-none d-sm-block mr-0">
                                            <div class="dropdown">
                                                <a href="#" role="button" title="Details"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-more-vertical">
                                                        <circle cx="12" cy="12" r="1"></circle>
                                                        <circle cx="12" cy="5" r="1"></circle>
                                                        <circle cx="12" cy="19" r="1"></circle>
                                                    </svg>
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item align-items-center d-flex" href="#"
                                                        data-chat-info-toggle="">
                                                        <!-- Default :: Inline SVG -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-users">
                                                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                                            <circle cx="9" cy="7" r="4"></circle>
                                                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                                        </svg>
                                                        <span>Create new group</span>
                                                    </a>

                                                    <a class="dropdown-item align-items-center d-flex" href="#">
                                                        <!-- Default :: Inline SVG -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-trash-2">
                                                            <polyline points="3 6 5 6 21 6"></polyline>
                                                            <path
                                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                            </path>
                                                            <line x1="10" y1="11" x2="10"
                                                                y2="17"></line>
                                                            <line x1="14" y1="11" x2="14"
                                                                y2="17"></line>
                                                        </svg>

                                                        <span>Delete conversation</span>
                                                    </a>
                                                    <a class="dropdown-item align-items-center d-flex" href="#">
                                                        <!-- Default :: Inline SVG -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-x-octagon">
                                                            <polygon
                                                                points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2">
                                                            </polygon>
                                                            <line x1="15" y1="9" x2="9"
                                                                y2="15"></line>
                                                            <line x1="9" y1="9" x2="15"
                                                                y2="15"></line>
                                                        </svg>

                                                        <span>Block &amp; report</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                                <div class="chat-box p-xl-30 pl-lg-20 pr-lg-0">
                                    <!-- Start: Incomming -->
                                    <div class="flex-1 incoming-chat">
                                        <div class="chat-text-box">
                                            <div class="media ">
                                                <div class="chat-text-box__photo ">
                                                    <img src="img/author/1.jpg" class="align-self-start mr-15 wh-46"
                                                        alt="img">
                                                </div>
                                                <div class="media-body">
                                                    <div class="chat-text-box__content">
                                                        <div class="chat-text-box__title d-flex align-items-center">
                                                            <h6 class="fs-14">Domnic Harys</h6>
                                                            <span
                                                                class="chat-text-box__time fs-12 color-light fw-400 ml-15">8:30
                                                                PM</span>
                                                        </div>
                                                        <div class="d-flex align-items-center mb-20 mt-10">
                                                            <div class="chat-text-box__subtitle p-20 bg-primary">
                                                                <p class="color-white">Jam nonumy eirmod tempor invidunt
                                                                    ut
                                                                    labore
                                                                    et dolore magna aliquyam erat consetetur sadipscing
                                                                    elitr
                                                                    sed
                                                                    diam nonumy eirmod tempor invidunt ut labore et dolore
                                                                    magna
                                                                    aliquyam erat sed diam voluptua..</p>
                                                            </div>
                                                            <div class="chat-text-box__other d-flex">
                                                                <div class="chat-text-box__reaction px-sm-15 px-2">

                                                                    <div class="emotions">
                                                                        <div class="dropdown  dropdown-click ">
                                                                            <button
                                                                                class="btn-link border-0 bg-transparent p-0"
                                                                                data-toggle="dropdown"
                                                                                aria-haspopup="true"
                                                                                aria-expanded="false">
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    stroke="currentColor"
                                                                                    stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    class="feather feather-smile">
                                                                                    <circle cx="12"
                                                                                        cy="12" r="10"></circle>
                                                                                    <path d="M8 14s1.5 2 4 2 4-2 4-2">
                                                                                    </path>
                                                                                    <line x1="9" y1="9"
                                                                                        x2="9.01" y2="9">
                                                                                    </line>
                                                                                    <line x1="15" y1="9"
                                                                                        x2="15.01" y2="9">
                                                                                    </line>
                                                                                </svg> </button>
                                                                            <div
                                                                                class="dropdown-default dropdown-bottomRight dropdown-menu-right dropdown-menu">
                                                                                <ul class="emotions__parent d-flex">
                                                                                    <li>
                                                                                        <a class=""
                                                                                            href="#">
                                                                                            <img src="img/svg/cool.png"
                                                                                                alt="emotions">
                                                                                        </a>
                                                                                    </li>
                                                                                    <li><a class=""
                                                                                            href="#">
                                                                                            <img src="img/svg/happy2.png"
                                                                                                alt="emotions">
                                                                                        </a></li>
                                                                                    <li><a class=""
                                                                                            href="#">
                                                                                            <img src="img/svg/happy.png"
                                                                                                alt="emotions">
                                                                                        </a></li>
                                                                                    <li><a class=""
                                                                                            href="#">
                                                                                            <img src="img/svg/shocked.png"
                                                                                                alt="emotions">
                                                                                        </a></li>
                                                                                    <li><a class=""
                                                                                            href="#">
                                                                                            <img src="img/svg/like.png"
                                                                                                alt="emotions">
                                                                                        </a></li>
                                                                                    <li><a class=""
                                                                                            href="#">
                                                                                            <img src="img/svg/heart.png"
                                                                                                alt="emotions">
                                                                                        </a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                                <div class="dropdown dropdown-click">
                                                                    <button class="btn-link border-0 bg-transparent p-0"
                                                                        data-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-more-horizontal">
                                                                            <circle cx="12" cy="12" r="1">
                                                                            </circle>
                                                                            <circle cx="19" cy="12" r="1">
                                                                            </circle>
                                                                            <circle cx="5" cy="12" r="1">
                                                                            </circle>
                                                                        </svg>
                                                                    </button>
                                                                    <div class="dropdown-default dropdown-bottomRight dropdown-menu-right dropdown-menu"
                                                                        style="">
                                                                        <a class="dropdown-item" href="#">Copy</a>
                                                                        <a class="dropdown-item"
                                                                            href="#">Quote</a>
                                                                        <a class="dropdown-item"
                                                                            href="#">Forward</a>
                                                                        <a class="dropdown-item"
                                                                            href="#">Report</a>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End: Incomming -->
                                    <p class="social-connector text-center text-capitalize">
                                        <span>today</span>
                                    </p>
                                    <!-- Start: Outgoing -->
                                    <div class="flex-1 justify-content-end d-flex outgoing-chat mt-20">
                                        <div class="chat-text-box">
                                            <div class="media ">
                                                <div class="media-body">
                                                    <div class="chat-text-box__content">
                                                        <div
                                                            class="chat-text-box__title d-flex align-items-center justify-content-end mb-2">
                                                            <span
                                                                class="chat-text-box__time fs-12 color-light fw-400">8:30
                                                                PM</span>
                                                        </div>
                                                        <div class="d-flex align-items-center justify-content-end">
                                                            <div class="chat-text-box__other d-flex">
                                                                <div class="px-15">

                                                                    <div class="dropdown dropdown-click">
                                                                        <button
                                                                            class="btn-link border-0 bg-transparent p-0"
                                                                            data-toggle="dropdown" aria-haspopup="true"
                                                                            aria-expanded="false">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-more-horizontal">
                                                                                <circle cx="12" cy="12"
                                                                                    r="1"></circle>
                                                                                <circle cx="19" cy="12"
                                                                                    r="1"></circle>
                                                                                <circle cx="5" cy="12"
                                                                                    r="1"></circle>
                                                                            </svg>
                                                                        </button>
                                                                        <div class="dropdown-default dropdown-bottomRight dropdown-menu-right dropdown-menu"
                                                                            style="">
                                                                            <a class="dropdown-item"
                                                                                href="#">Copy</a>
                                                                            <a class="dropdown-item"
                                                                                href="#">Quote</a>
                                                                            <a class="dropdown-item"
                                                                                href="#">Forward</a>
                                                                            <a class="dropdown-item"
                                                                                href="#">Report</a>
                                                                            <a class="dropdown-item"
                                                                                href="#">remove</a>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="chat-text-box__subtitle p-20 bg-deep">
                                                                <p class="color-gray">Jam nonumy eirmod tempor invidunt ut
                                                                    labore
                                                                    et dolore magna aliquyam erat consetetur sadipscing
                                                                    elitr
                                                                    sed
                                                                    diam nonumy eirmod tempor invidunt ut labore et dolore
                                                                    magna
                                                                    aliquyam erat sed diam voluptua..</p>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex-1 justify-content-end d-flex outgoing-chat">
                                        <div class="chat-text-box">
                                            <div class="media ">
                                                <div class="media-body">
                                                    <div class="chat-text-box__content">
                                                        <div class="d-flex align-items-center justify-content-end">
                                                            <div class="chat-text-box__other d-flex">
                                                                <div class="px-15">

                                                                    <div class="dropdown dropdown-click">
                                                                        <button
                                                                            class="btn-link border-0 bg-transparent p-0"
                                                                            data-toggle="dropdown" aria-haspopup="true"
                                                                            aria-expanded="false">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-more-horizontal">
                                                                                <circle cx="12" cy="12"
                                                                                    r="1"></circle>
                                                                                <circle cx="19" cy="12"
                                                                                    r="1"></circle>
                                                                                <circle cx="5" cy="12"
                                                                                    r="1"></circle>
                                                                            </svg>
                                                                        </button>
                                                                        <div class="dropdown-default dropdown-bottomRight dropdown-menu-right dropdown-menu"
                                                                            style="">
                                                                            <a class="dropdown-item"
                                                                                href="#">Copy</a>
                                                                            <a class="dropdown-item"
                                                                                href="#">Quote</a>
                                                                            <a class="dropdown-item"
                                                                                href="#">Forward</a>
                                                                            <a class="dropdown-item"
                                                                                href="#">Report</a>
                                                                            <a class="dropdown-item"
                                                                                href="#">remove</a>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="chat-text-box__subtitle p-20 bg-deep">
                                                                <p class="color-gray">Jam nonumy eirmod tempor invidunt ut
                                                                    labore et
                                                                    dolore magna.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End: Outgoing  -->
                                    <!-- Start: Incomming -->
                                    <div class="flex-1 incoming-chat mt-30">
                                        <div class="chat-text-box">
                                            <div class="media ">
                                                <div class="chat-text-box__photo ">
                                                    <img src="img/author/1.jpg" class="align-self-start mr-15 wh-46"
                                                        alt="img">
                                                </div>
                                                <div class="media-body">
                                                    <div class="chat-text-box__content">
                                                        <div class="chat-text-box__title d-flex align-items-center">
                                                            <h6 class="fs-14">Domnic Harys</h6>
                                                            <span
                                                                class="chat-text-box__time fs-12 color-light fw-400 ml-15">8:30
                                                                PM</span>
                                                        </div>
                                                        <div class="d-flex align-items-center mb-20 mt-10">
                                                            <div class="chat-text-box__subtitle p-20 bg-primary">
                                                                <p class="color-white">Jam nonumy eirmod tempor invidunt
                                                                    ut
                                                                    labore
                                                                    et dolore magna.</p>
                                                            </div>
                                                            <div class="chat-text-box__other d-flex">
                                                                <div class="chat-text-box__reaction px-sm-15 px-2">

                                                                    <div class="emotions">
                                                                        <div class="dropdown  dropdown-click ">
                                                                            <button
                                                                                class="btn-link border-0 bg-transparent p-0"
                                                                                data-toggle="dropdown"
                                                                                aria-haspopup="true"
                                                                                aria-expanded="false">
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    stroke="currentColor"
                                                                                    stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    class="feather feather-smile">
                                                                                    <circle cx="12"
                                                                                        cy="12" r="10"></circle>
                                                                                    <path d="M8 14s1.5 2 4 2 4-2 4-2">
                                                                                    </path>
                                                                                    <line x1="9" y1="9"
                                                                                        x2="9.01" y2="9">
                                                                                    </line>
                                                                                    <line x1="15" y1="9"
                                                                                        x2="15.01" y2="9">
                                                                                    </line>
                                                                                </svg> </button>
                                                                            <div
                                                                                class="dropdown-default dropdown-bottomRight dropdown-menu-right dropdown-menu">
                                                                                <ul class="emotions__parent d-flex">
                                                                                    <li>
                                                                                        <a class=""
                                                                                            href="#">
                                                                                            <img src="img/svg/cool.png"
                                                                                                alt="emotions">
                                                                                        </a>
                                                                                    </li>
                                                                                    <li><a class=""
                                                                                            href="#">
                                                                                            <img src="img/svg/happy2.png"
                                                                                                alt="emotions">
                                                                                        </a></li>
                                                                                    <li><a class=""
                                                                                            href="#">
                                                                                            <img src="img/svg/happy.png"
                                                                                                alt="emotions">
                                                                                        </a></li>
                                                                                    <li><a class=""
                                                                                            href="#">
                                                                                            <img src="img/svg/shocked.png"
                                                                                                alt="emotions">
                                                                                        </a></li>
                                                                                    <li><a class=""
                                                                                            href="#">
                                                                                            <img src="img/svg/like.png"
                                                                                                alt="emotions">
                                                                                        </a></li>
                                                                                    <li><a class=""
                                                                                            href="#">
                                                                                            <img src="img/svg/heart.png"
                                                                                                alt="emotions">
                                                                                        </a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                                <div class="dropdown dropdown-click">
                                                                    <button class="btn-link border-0 bg-transparent p-0"
                                                                        data-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-more-horizontal">
                                                                            <circle cx="12" cy="12" r="1">
                                                                            </circle>
                                                                            <circle cx="19" cy="12" r="1">
                                                                            </circle>
                                                                            <circle cx="5" cy="12" r="1">
                                                                            </circle>
                                                                        </svg>
                                                                    </button>
                                                                    <div class="dropdown-default dropdown-bottomRight dropdown-menu-right dropdown-menu"
                                                                        style="">
                                                                        <a class="dropdown-item" href="#">Copy</a>
                                                                        <a class="dropdown-item"
                                                                            href="#">Quote</a>
                                                                        <a class="dropdown-item"
                                                                            href="#">Forward</a>
                                                                        <a class="dropdown-item"
                                                                            href="#">Report</a>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End: Incomming -->
                                    <!-- Start: Outgoing -->
                                    <div class="flex-1 justify-content-end d-flex outgoing-chat">
                                        <div class="chat-text-box">
                                            <div class="media ">
                                                <div class="media-body">
                                                    <div class="chat-text-box__content">
                                                        <div
                                                            class="chat-text-box__title d-flex align-items-center justify-content-end mb-2">
                                                            <span
                                                                class="chat-text-box__time fs-12 color-light fw-400">8:30
                                                                PM</span>
                                                        </div>
                                                        <div class="d-flex align-items-center justify-content-end">
                                                            <div class="chat-text-box__other d-flex">
                                                                <div class="px-15">

                                                                    <div class="dropdown dropdown-click">
                                                                        <button
                                                                            class="btn-link border-0 bg-transparent p-0"
                                                                            data-toggle="dropdown" aria-haspopup="true"
                                                                            aria-expanded="false">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-more-horizontal">
                                                                                <circle cx="12" cy="12"
                                                                                    r="1"></circle>
                                                                                <circle cx="19" cy="12"
                                                                                    r="1"></circle>
                                                                                <circle cx="5" cy="12"
                                                                                    r="1"></circle>
                                                                            </svg>
                                                                        </button>
                                                                        <div class="dropdown-default dropdown-bottomRight dropdown-menu-right dropdown-menu"
                                                                            style="">
                                                                            <a class="dropdown-item"
                                                                                href="#">Copy</a>
                                                                            <a class="dropdown-item"
                                                                                href="#">Quote</a>
                                                                            <a class="dropdown-item"
                                                                                href="#">Forward</a>
                                                                            <a class="dropdown-item"
                                                                                href="#">Report</a>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="chat-text-box__subtitle p-20 bg-deep">
                                                                <p class="color-gray">Jam nonumy eirmod tempor invidunt ut
                                                                    labore et
                                                                    dolore magna.</p>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="seen-chat d-flex align-items-center  justify-content-end mb-2 mt-10">
                                                            <div
                                                                class="chat-text-box__title d-flex align-items-center mr-10 ">
                                                                <span
                                                                    class="chat-text-box__time fs-12 color-light fw-400">Seen
                                                                    9:20
                                                                    PM</span>
                                                            </div>
                                                            <img src="img/author/1.jpg" alt="img"
                                                                class="wh-20 rounded-circle">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End: Outgoing  -->
                                    <!-- Start: Incomming -->
                                    <div class="flex-1 incoming-chat mt-30">
                                        <div class="chat-text-box">
                                            <div class="media ">
                                                <div class="chat-text-box__photo ">
                                                    <img src="img/author/1.jpg" class="align-self-start mr-15 wh-46"
                                                        alt="img">
                                                </div>
                                                <div class="media-body">
                                                    <div class="chat-text-box__content">
                                                        <div class="d-flex align-items-center ">
                                                            <div class="chat-text-box__subtitle typing cbg-light pr-30">
                                                                <p class="color-light text-capitalize">typing...</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End: Incomming -->

                                </div>
                                <div class="chat-footer px-xl-30 px-lg-20 pb-lg-30 pt-1">
                                    <div class="chat-type-text">
                                        <div class="pt-0 outline-0 pb-0 pr-0 pl-0 rounded-0 position-relative d-flex align-items-center"
                                            tabindex="-1">
                                            <div
                                                class="d-flex justify-content-between align-items-center w-100 flex-wrap">
                                                <div class=" flex-1 d-flex align-items-center chat-type-text__write ml-0">
                                                    <a href="#">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-smile">
                                                            <circle cx="12" cy="12" r="10"></circle>
                                                            <path d="M8 14s1.5 2 4 2 4-2 4-2"></path>
                                                            <line x1="9" y1="9" x2="9.01"
                                                                y2="9"></line>
                                                            <line x1="15" y1="9" x2="15.01"
                                                                y2="9"></line>
                                                        </svg></a>
                                                    <input class="form-control border-0 bg-transparent box-shadow-none"
                                                        placeholder="Type your message...">

                                                </div>
                                                <div class="chat-type-text__btn">
                                                    <button type="button"
                                                        class="border-0 btn-deep color-light wh-50 p-10 rounded-circle">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-image">
                                                            <rect x="3" y="3" width="18" height="18"
                                                                rx="2" ry="2"></rect>
                                                            <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                                            <polyline points="21 15 16 10 5 21"></polyline>
                                                        </svg></button>
                                                    <button type="button"
                                                        class="border-0 btn-deep color-light wh-50 p-10 rounded-circle">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-paperclip">
                                                            <path
                                                                d="M21.44 11.05l-9.19 9.19a6 6 0 0 1-8.49-8.49l9.19-9.19a4 4 0 0 1 5.66 5.66l-9.2 9.19a2 2 0 0 1-2.83-2.83l8.49-8.48">
                                                            </path>
                                                        </svg></button>
                                                    <button type="button"
                                                        class="border-0 btn-primary wh-50 p-10 rounded-circle">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            class="feather feather-send">
                                                            <line x1="22" y1="2" x2="11"
                                                                y2="13"></line>
                                                            <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                                                        </svg></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- ends: .chat -->
                    </div>
                </div><!-- Ends: .tab-content -->
            </div><!-- Ends: .chat-area -->


        </div>
    </main>
@endsection
