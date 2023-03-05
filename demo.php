<!DOCTYPE html>
<html lang="en">
  <!-- calendar23:59-->
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=0"
    />
    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="img/favicon.ico"
    />
    <title>Preclinic - Medical & Hospital - Bootstrap 4 Admin Template</title>
    <link
      rel="stylesheet"
      type="text/css"
      href="css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="css/fullcalendar.min.css"
    />
    <link rel="stylesheet" type="text/css" href="css/select2.min.css" />
    <link
      rel="stylesheet"
      type="text/css"
      href="css/bootstrap-datetimepicker.min.css"
    />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.min.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="main-wrapper">
      <div class="header">
        <div class="header-left">
          <a href="index-2.html" class="logo">
            <span>UWC 2.0</span>
          </a>
        </div>
        <a id="toggle_btn" href="javascript:void(0);"
          ><i class="fa fa-bars"></i
        ></a>
        <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"
          ><i class="fa fa-bars"></i
        ></a>
        <ul class="nav user-menu float-right">
          <li class="nav-item dropdown d-none d-sm-block">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"
              ><i class="fa fa-bell-o"></i>
              <span class="badge badge-pill bg-danger float-right">3</span></a
            >
            <div class="dropdown-menu notifications">
              <div class="topnav-dropdown-header">
                <span>Notifications</span>
              </div>
              <div class="drop-scroll">
                <ul class="notification-list">
                  <li class="notification-message">
                    <a href="activities.html">
                      <div class="media">
                        <span class="avatar">G</span>
                        <div class="media-body">
                          <p class="noti-details">
                            <span class="noti-title">Rolland Webber</span>
                            completed task
                            <span class="noti-title"
                              >Patient and Doctor video conferencing</span
                            >
                          </p>
                          <p class="noti-time">
                            <span class="notification-time">12 mins ago</span>
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="notification-message">
                    <a href="activities.html">
                      <div class="media">
                        <span class="avatar">V</span>
                        <div class="media-body">
                          <p class="noti-details">
                            <span class="noti-title">Bernardo Galaviz</span>
                            added new task
                            <span class="noti-title">Private chat module</span>
                          </p>
                          <p class="noti-time">
                            <span class="notification-time">2 days ago</span>
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="topnav-dropdown-footer">
                <a href="activities.html">View all Notifications</a>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown d-none d-sm-block">
            <a
              href="javascript:void(0);"
              id="open_msg_box"
              class="hasnotifications nav-link"
              ><i class="fa fa-comment-o"></i>
              <span class="badge badge-pill bg-danger float-right">8</span></a
            >
          </li>
          <li class="nav-item dropdown has-arrow">
            <a
              href="#"
              class="dropdown-toggle nav-link user-link"
              data-toggle="dropdown"
            >
              <span class="user-img">
                <img
                  class="rounded-circle"
                  src="assets/img/user.jpg"
                  width="24"
                />
                <span class="status online"></span>
              </span>
              <span>Hoang Hung</span>
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="profile.html">My Profile</a>
              <a class="dropdown-item" href="edit-profile.html">Edit Profile</a>
              <a class="dropdown-item" href="settings.html">Settings</a>
              <a class="dropdown-item" href="login.html">Logout</a>
            </div>
          </li>
        </ul>
        <div class="dropdown mobile-user-menu float-right">
          <a
            href="#"
            class="dropdown-toggle"
            data-toggle="dropdown"
            aria-expanded="false"
            ><i class="fa fa-ellipsis-v"></i
          ></a>
          <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="profile.html">My Profile</a>
            <a class="dropdown-item" href="edit-profile.html">Edit Profile</a>
            <a class="dropdown-item" href="settings.html">Settings</a>
            <a class="dropdown-item" href="login.html">Logout</a>
          </div>
        </div>
      </div>
      <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
          <div id="sidebar-menu" class="sidebar-menu">
            <ul>
              <li class="menu-title">Tổng quan</li>
              <li>
                <a href="index-2.html"
                  ><i class="fa fa-dashboard"></i>
                  <span>Màn hình chính</span></a
                >
              </li>

              <li class="submenu">
                <a href="#"
                  ><i class="fa fa-user"></i> <span> Nhân lực </span>
                  <span class="menu-arrow"></span
                ></a>
                <ul style="display: none">
                  <li><a href="employees.html">Nhân viên văn phòng</a></li>
                  <li><a href="leaves.html">Nhân viên dọn dẹp</a></li>
                  <li><a href="holidays.html">Nhân viên lái xe</a></li>
                  <li><a href="attendance.html">Phương tiện giao thông</a></li>
                </ul>
              </li>
              <li class="active">
                <a href="calendar.html"
                  ><i class="fa fa-calendar"></i> <span>Thời gian biểu</span></a
                >
              </li>
              <li>
                <a href="chat.html"
                  ><i class="fa fa-comments"></i> <span>Chat</span>
                  <span class="badge badge-pill bg-primary float-right"
                    >3</span
                  ></a
                >
              </li>
              <li>
                <a href="activities.html"
                  ><i class="fa fa-bell-o"></i> <span>Thông báo</span
                  ><span class="badge badge-pill bg-primary float-right"
                    >8</span
                  ></a
                >
              </li>
              <li class="menu-title">Phân công việc</li>

              <li>
                <a href="appointments.html"
                  ><i class="fa fa-calendar"></i>
                  <span>Phân công nhân viên</span></a
                >
              </li>
              <li>
                <a href="schedule.html"
                  ><i class="fa fa-calendar-check-o"></i>
                  <span>Phân công phương tiện</span></a
                >
              </li>
              <li>
                <a href="departments.html"
                  ><i class="fa fa-hospital-o"></i>
                  <span>Phân công địa điểm</span></a
                >
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="page-wrapper">
        <div class="content">
          <div class="row">
            <div class="col-sm-8 col-4">
              <h4 class="page-title">Lịch</h4>
            </div>
            <div class="col-sm-4 col-8 text-right m-b-30">
              <a
                href="#"
                class="btn btn-primary btn-rounded"
                data-toggle="modal"
                data-target="#add_event"
                ><i class="fa fa-plus"></i> Thêm sự kiện/công việc</a
              >
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="card-box mb-0">
                <div class="row">
                  <div class="col-md-12">
                    <div id="calendar"></div>
                  </div>
                </div>
              </div>
              <div class="modal fade none-border" id="event-modal">
                <div class="modal-dialog">
                  <div class="modal-content modal-md">
                    <div class="modal-header">
                      <h4 class="modal-title">Thêm ghi chú/công việc</h4>
                      <button type="button" class="close" data-dismiss="modal">
                        &times;
                      </button>
                    </div>
                    <div class="modal-body"></div>
                    <div class="modal-footer text-center">
                      <button
                        type="button"
                        class="btn btn-primary submit-btn save-event"
                      >
                        Create event
                      </button>
                      <button
                        type="button"
                        class="btn btn-danger btn-lg delete-event"
                        data-dismiss="modal"
                      >
                        Delete
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="notification-box">
          <div class="msg-sidebar notifications msg-noti">
            <div class="topnav-dropdown-header">
              <span>Messages</span>
            </div>
            <div class="drop-scroll msg-list-scroll" id="msg_list">
              <ul class="list-box">
                <li>
                  <a href="chat.html">
                    <div class="list-item">
                      <div class="list-left">
                        <span class="avatar">R</span>
                      </div>
                      <div class="list-body">
                        <span class="message-author">Richard Miles </span>
                        <span class="message-time">12:28 AM</span>
                        <div class="clearfix"></div>
                        <span class="message-content"
                          >Lorem ipsum dolor sit amet, consectetur
                          adipiscing</span
                        >
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="chat.html">
                    <div class="list-item new-message">
                      <div class="list-left">
                        <span class="avatar">J</span>
                      </div>
                      <div class="list-body">
                        <span class="message-author">John Doe</span>
                        <span class="message-time">1 Aug</span>
                        <div class="clearfix"></div>
                        <span class="message-content"
                          >Lorem ipsum dolor sit amet, consectetur
                          adipiscing</span
                        >
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="chat.html">
                    <div class="list-item">
                      <div class="list-left">
                        <span class="avatar">T</span>
                      </div>
                      <div class="list-body">
                        <span class="message-author"> Tarah Shropshire </span>
                        <span class="message-time">12:28 AM</span>
                        <div class="clearfix"></div>
                        <span class="message-content"
                          >Lorem ipsum dolor sit amet, consectetur
                          adipiscing</span
                        >
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="chat.html">
                    <div class="list-item">
                      <div class="list-left">
                        <span class="avatar">M</span>
                      </div>
                      <div class="list-body">
                        <span class="message-author">Mike Litorus</span>
                        <span class="message-time">12:28 AM</span>
                        <div class="clearfix"></div>
                        <span class="message-content"
                          >Lorem ipsum dolor sit amet, consectetur
                          adipiscing</span
                        >
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="chat.html">
                    <div class="list-item">
                      <div class="list-left">
                        <span class="avatar">C</span>
                      </div>
                      <div class="list-body">
                        <span class="message-author"> Catherine Manseau </span>
                        <span class="message-time">12:28 AM</span>
                        <div class="clearfix"></div>
                        <span class="message-content"
                          >Lorem ipsum dolor sit amet, consectetur
                          adipiscing</span
                        >
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="chat.html">
                    <div class="list-item">
                      <div class="list-left">
                        <span class="avatar">D</span>
                      </div>
                      <div class="list-body">
                        <span class="message-author"> Domenic Houston </span>
                        <span class="message-time">12:28 AM</span>
                        <div class="clearfix"></div>
                        <span class="message-content"
                          >Lorem ipsum dolor sit amet, consectetur
                          adipiscing</span
                        >
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="chat.html">
                    <div class="list-item">
                      <div class="list-left">
                        <span class="avatar">B</span>
                      </div>
                      <div class="list-body">
                        <span class="message-author"> Buster Wigton </span>
                        <span class="message-time">12:28 AM</span>
                        <div class="clearfix"></div>
                        <span class="message-content"
                          >Lorem ipsum dolor sit amet, consectetur
                          adipiscing</span
                        >
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="chat.html">
                    <div class="list-item">
                      <div class="list-left">
                        <span class="avatar">R</span>
                      </div>
                      <div class="list-body">
                        <span class="message-author"> Rolland Webber </span>
                        <span class="message-time">12:28 AM</span>
                        <div class="clearfix"></div>
                        <span class="message-content"
                          >Lorem ipsum dolor sit amet, consectetur
                          adipiscing</span
                        >
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="chat.html">
                    <div class="list-item">
                      <div class="list-left">
                        <span class="avatar">C</span>
                      </div>
                      <div class="list-body">
                        <span class="message-author"> Claire Mapes </span>
                        <span class="message-time">12:28 AM</span>
                        <div class="clearfix"></div>
                        <span class="message-content"
                          >Lorem ipsum dolor sit amet, consectetur
                          adipiscing</span
                        >
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="chat.html">
                    <div class="list-item">
                      <div class="list-left">
                        <span class="avatar">M</span>
                      </div>
                      <div class="list-body">
                        <span class="message-author">Melita Faucher</span>
                        <span class="message-time">12:28 AM</span>
                        <div class="clearfix"></div>
                        <span class="message-content"
                          >Lorem ipsum dolor sit amet, consectetur
                          adipiscing</span
                        >
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="chat.html">
                    <div class="list-item">
                      <div class="list-left">
                        <span class="avatar">J</span>
                      </div>
                      <div class="list-body">
                        <span class="message-author">Jeffery Lalor</span>
                        <span class="message-time">12:28 AM</span>
                        <div class="clearfix"></div>
                        <span class="message-content"
                          >Lorem ipsum dolor sit amet, consectetur
                          adipiscing</span
                        >
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="chat.html">
                    <div class="list-item">
                      <div class="list-left">
                        <span class="avatar">L</span>
                      </div>
                      <div class="list-body">
                        <span class="message-author">Loren Gatlin</span>
                        <span class="message-time">12:28 AM</span>
                        <div class="clearfix"></div>
                        <span class="message-content"
                          >Lorem ipsum dolor sit amet, consectetur
                          adipiscing</span
                        >
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="chat.html">
                    <div class="list-item">
                      <div class="list-left">
                        <span class="avatar">T</span>
                      </div>
                      <div class="list-body">
                        <span class="message-author">Tarah Shropshire</span>
                        <span class="message-time">12:28 AM</span>
                        <div class="clearfix"></div>
                        <span class="message-content"
                          >Lorem ipsum dolor sit amet, consectetur
                          adipiscing</span
                        >
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
            <div class="topnav-dropdown-footer">
              <a href="chat.html">See all messages</a>
            </div>
          </div>
        </div>
      </div>
      <div id="add_event" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content modal-md">
            <div class="modal-header">
              <h4 class="modal-title">Add Event</h4>
              <button type="button" class="close" data-dismiss="modal">
                &times;
              </button>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-group">
                  <label>Event Name <span class="text-danger">*</span></label>
                  <input class="form-control" type="text" />
                </div>
                <div class="form-group">
                  <label>Event Date <span class="text-danger">*</span></label>
                  <div class="cal-icon">
                    <input class="form-control datetimepicker" type="text" />
                  </div>
                </div>
                <div class="m-t-20 text-center">
                  <button class="btn btn-primary submit-btn">
                    Create Event
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" tabindex="-1" data-bs-backdrop="static" id="event-details-modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-0">
                <div class="modal-header rounded-0">
                    <h5 class="modal-title">Schedule Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body rounded-0">
                    <div class="container-fluid">
                        <dl>
                            <dt class="text-muted">Title</dt>
                            <dd id="title" class="fw-bold fs-4"></dd>
                            <dt class="text-muted">Description</dt>
                            <dd id="description" class=""></dd>
                            <dt class="text-muted">Start</dt>
                            <dd id="start" class=""></dd>
                            <dt class="text-muted">End</dt>
                            <dd id="end" class=""></dd>
                        </dl>
                    </div>
                </div>
                <div class="modal-footer rounded-0">
                    <div class="text-end">
                        <button type="button" class="btn btn-primary btn-sm rounded-0" id="edit" data-id="">Edit</button>
                        <button type="button" class="btn btn-danger btn-sm rounded-0" id="delete" data-id="">Delete</button>
                        <button type="button" class="btn btn-secondary btn-sm rounded-0" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/jquery-ui.min.html"></script>
    <script src="assets/js/fullcalendar.min.js"></script>
    <script src="assets/js/jquery.fullcalendar.js"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="assets/js/app.js"></script>
  </body>

  <!-- calendar24:03-->
</html>
