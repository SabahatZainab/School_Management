<!-- Sidebar -->
      <nav id="sidebar" aria-label="Main Navigation">
        <!-- Side Header -->
        <div class="content-header">
          <!-- Logo -->
          <a class="fw-semibold text-dual" href="{{route('home')}}">
            <span class="smini-visible">
              <i class="fa fa-circle-notch text-primary"></i>
            </span>
            <span class="smini-hide fs-5 tracking-wider">School</span>
          </a>
          <!-- END Logo -->

          <!-- Extra -->
            @include('layouts.partials.theme')
          <!-- END Extra -->
        </div>
        <!-- END Side Header -->

        <!-- Sidebar Scrolling -->
        <div class="js-sidebar-scroll">
          <!-- Side Navigation -->
          <div class="content-side">
            <ul class="nav-main">
              <li class="nav-main-item">
                <a class="nav-main-link active" href="{{route('home')}}">
                  <i class="nav-main-link-icon si si-speedometer"></i>
                  <span class="nav-main-link-name">Dashboard</span>
                </a>
              </li>
              {{-- <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <i class="nav-main-link-icon si si-layers"></i>
                  <span class="nav-main-link-name">Management</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                      <i class="nav-main-link-icon si si-bag"></i>
                      <span class="nav-main-link-name">User</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_ecom_dashboard.html">
                          <span class="nav-main-link-name">Dashboard</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_ecom_orders.html">
                          <span class="nav-main-link-name">Orders</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_ecom_order.html">
                          <span class="nav-main-link-name">Order</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_ecom_products.html">
                          <span class="nav-main-link-name">Products</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_ecom_product_edit.html">
                          <span class="nav-main-link-name">Product Edit</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_ecom_customer.html">
                          <span class="nav-main-link-name">Customer</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                      <i class="nav-main-link-icon si si-handbag"></i>
                      <span class="nav-main-link-name">e-Commerce Store</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_ecom_store_home.html">
                          <span class="nav-main-link-name">Home</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_ecom_store_search.html">
                          <span class="nav-main-link-name">Search Results</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_ecom_store_products.html">
                          <span class="nav-main-link-name">Products List</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_ecom_store_product.html">
                          <span class="nav-main-link-name">Product Page</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_ecom_store_checkout.html">
                          <span class="nav-main-link-name">Checkout</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                      <i class="nav-main-link-icon si si-pencil"></i>
                      <span class="nav-main-link-name">Blog</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_blog_classic.html">
                          <span class="nav-main-link-name">Classic</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_blog_list.html">
                          <span class="nav-main-link-name">List</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_blog_grid.html">
                          <span class="nav-main-link-name">Grid</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_blog_story.html">
                          <span class="nav-main-link-name">Story</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_blog_story_cover.html">
                          <span class="nav-main-link-name">Story Cover</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                      <i class="nav-main-link-icon si si-graduation"></i>
                      <span class="nav-main-link-name">e-Learning</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_elearning_courses.html">
                          <span class="nav-main-link-name">Courses</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_elearning_course.html">
                          <span class="nav-main-link-name">Course</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_elearning_lesson.html">
                          <span class="nav-main-link-name">Lesson</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                      <i class="nav-main-link-icon si si-bubbles"></i>
                      <span class="nav-main-link-name">Forum</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_forum_categories.html">
                          <span class="nav-main-link-name">Categories</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_forum_topics.html">
                          <span class="nav-main-link-name">Topics</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_forum_discussion.html">
                          <span class="nav-main-link-name">Discussion</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                      <i class="nav-main-link-icon si si-magnet"></i>
                      <span class="nav-main-link-name">Boxed Backend</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="bd_dashboard.html">
                          <span class="nav-main-link-name">Dashboard</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="bd_search.html">
                          <span class="nav-main-link-name">Search</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="bd_simple_1.html">
                          <span class="nav-main-link-name">Simple 1</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="bd_simple_2.html">
                          <span class="nav-main-link-name">Simple 2</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="bd_image_1.html">
                          <span class="nav-main-link-name">Image 1</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="bd_image_2.html">
                          <span class="nav-main-link-name">Image 2</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="bd_video_1.html">
                          <span class="nav-main-link-name">Video 1</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="bd_video_2.html">
                          <span class="nav-main-link-name">Video 2</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li> --}}
              <li class="nav-main-heading">Management</li>
              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <i class="nav-main-link-icon si si-energy"></i>
                  <span class="nav-main-link-name">Users</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="{{ route('users.index')}}">
                      <span class="nav-main-link-name">Users Listing</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <i class="nav-main-link-icon si si-trophy"></i>
                  <span class="nav-main-link-name">Roles</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="{{ route('roles.index') }}">
                      <span class="nav-main-link-name">Roles Listing</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <i class="nav-main-link-icon si si-badge"></i>
                  <span class="nav-main-link-name">Permissions</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="{{ route('permissions.index') }}">
                      <span class="nav-main-link-name">Permission Listing</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-main-heading">Develop</li>
              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <i class="nav-main-link-icon si si-wrench"></i>
                  <span class="nav-main-link-name">Components</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_comp_loaders.html">
                      <span class="nav-main-link-name">Loaders</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_comp_image_cropper.html">
                      <span class="nav-main-link-name">Image Cropper</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_comp_appear.html">
                      <span class="nav-main-link-name">Appear</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_comp_charts.html">
                      <span class="nav-main-link-name">Charts</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_comp_calendar.html">
                      <span class="nav-main-link-name">Calendar</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_comp_sliders.html">
                      <span class="nav-main-link-name">Sliders</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_comp_carousel.html">
                      <span class="nav-main-link-name">Carousel</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_comp_offcanvas.html">
                      <span class="nav-main-link-name">Offcanvas</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_comp_syntax_highlighting.html">
                      <span class="nav-main-link-name">Syntax Highlighting</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_comp_rating.html">
                      <span class="nav-main-link-name">Rating</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_comp_maps_vector.html">
                      <span class="nav-main-link-name">Vector Maps</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_comp_dialogs.html">
                      <span class="nav-main-link-name">Dialogs</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_comp_notifications.html">
                      <span class="nav-main-link-name">Notifications</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_comp_gallery.html">
                      <span class="nav-main-link-name">Gallery</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-main-heading">Pages</li>
              <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                  <i class="nav-main-link-icon si si-layers"></i>
                  <span class="nav-main-link-name">Generic</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_pages_generic_blank.html">
                      <span class="nav-main-link-name">Blank</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_pages_generic_blank_block.html">
                      <span class="nav-main-link-name">Blank with Block</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_pages_generic_search.html">
                      <span class="nav-main-link-name">Search</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_pages_generic_profile.html">
                      <span class="nav-main-link-name">Profile</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_pages_generic_profile_edit.html">
                      <span class="nav-main-link-name">Profile Edit</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_pages_generic_inbox.html">
                      <span class="nav-main-link-name">Inbox</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_pages_generic_invoice.html">
                      <span class="nav-main-link-name">Invoice</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_pages_generic_pricing_plans.html">
                      <span class="nav-main-link-name">Pricing Plans</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_pages_generic_faq.html">
                      <span class="nav-main-link-name">FAQ</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_pages_generic_team.html">
                      <span class="nav-main-link-name">Team</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_pages_generic_contact.html">
                      <span class="nav-main-link-name">Contact</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_pages_generic_support.html">
                      <span class="nav-main-link-name">Support</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_pages_generic_upgrade_plan.html">
                      <span class="nav-main-link-name">Upgrade Plan</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_pages_sidebar_mini_nav.html">
                      <span class="nav-main-link-name">Sidebar with Mini Nav</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="be_pages_dashboard_v1.html">
                      <span class="nav-main-link-name">Dashboard v1</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="op_maintenance.html">
                      <span class="nav-main-link-name">Maintenance</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="op_status.html">
                      <span class="nav-main-link-name">Status</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="op_installation.html">
                      <span class="nav-main-link-name">Installation</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="op_checkout.html">
                      <span class="nav-main-link-name">Checkout</span>
                    </a>
                  </li>
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="op_coming_soon.html">
                      <span class="nav-main-link-name">Coming Soon</span>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <!-- END Side Navigation -->
        </div>
        <!-- END Sidebar Scrolling -->
      </nav>
      <!-- END Sidebar -->
