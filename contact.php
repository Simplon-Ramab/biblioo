<?php include('header.php');?>


<section id="content">

        <!--breadcrumbs start-->
        <div id="breadcrumbs-wrapper">
            <!-- Search for small screen -->
            <div class="header-search-wrapper grey hide-on-large-only">
                <i class="mdi-action-search active"></i>
                <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize">
            </div>
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12 card-panel hoverable">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2783.180446943735!2d4.887929914887934!3d45.767573821171!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4c036c7cea2d9%3A0x69ebc052c500c62c!2s256+Cours+Emile+Zola%2C+69100+Villeurbanne!5e0!3m2!1sfr!2sfr!4v1481213436151" width="900" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
        <!--breadcrumbs end-->


        <!--start container-->
        <div class="container">
          <div class="section">

            <p class="caption">Avez vous des questions ou nous rencontrer ou créer un événement? N'hesitez pas à nous envoyez un message.</p>

            <div class="divider"></div>

            <div id="contact-page" class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <div id="map-canvas" data-lat="40.747688" data-lng="-74.004142"></div>
                </div>
                <div class="card-content">
                    <a class="btn-floating activator btn-move-up waves-effect waves-light darken-2 right">
                        <i class="mdi-editor-mode-edit"></i>
                    </a>

                    <div class="row">
                      <div class="col s12 m6">
                        <form class="contact-form">
                          <div class="row">
                            <div class="input-field col s12">
                              <input id="name" type="text">
                              <label for="first_name">Nom</label>
                            </div>
                          </div>
                          <div class="row">
                            <div class="input-field col s12">
                              <input id="email" type="email">
                              <label for="email">Prénom</label>
                            </div>
                          </div>
                          <div class="row">
                            <div class="input-field col s12">
                              <input id="website" type="text">
                              <label for="website">Site web</label>
                            </div>
                          </div>
                          <div class="row">
                            <div class="input-field col s12">
                              <textarea id="message" class="materialize-textarea"></textarea>
                              <label for="message">Message</label>
                            </div>
                            <div class="row">
                              <div class="input-field col s12">
                                <button class="btn waves-effect waves-light" type="submit" name="action">Envoyez
                                  <i class="mdi-content-send right"></i>
                                </button>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                      <div class="col s12 m6">
                        <ul class="collapsible collapsible-accordion" data-collapsible="accordion">
                          <li>
                            <div class="collapsible-header"><i class="mdi-communication-live-help"></i> FAQ</div>
                            <div class="collapsible-body" style="">
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                          </li>
                          <li class="active">
                            <div class="collapsible-header active"><i class="mdi-communication-email"></i> Besoin d'aide ?</div>
                            <div class="collapsible-body" style="display: none;">
                              <p>We welcome your inquiries at the email address <a mailto="support@biblioo.com">support@biblioo.com</a>.We will get in touch with you soon.</p>
                              <p>As a creative studio we believe no client is too big nor too small to work with us to obtain good advantage.By combining the creativity of artists with the precision of engineers we develop custom solutions that achieve results. <a href="http://themeforest.net/user/geekslabs/portfolio" target="_blank">See our work.</a></p>
                            </div>
                          </li>
                          <li>
                            <div class="collapsible-header"><i class="mdi-editor-insert-emoticon"></i> Testimonial</div>
                            <div class="collapsible-body" style="">
                              <blockquote>Fantastic product, my sites all run super fast and the support is excellent!<br>The website you designed helped a lot! </blockquote>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>

                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text">BIBLIOO<i class="mdi-navigation-close right"></i></span>
                    <p>Here is some more information about this card.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent at ante gravida, finibus magna non, faucibus mauris. Nulla ut diam et purus varius commodo id at magna. Donec aliquet nulla eu lacus suscipit, id facilisis lorem ultricies.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent at ante gravida, finibus magna non, faucibus mauris. Nulla ut diam et purus varius commodo id at magna. Donec aliquet nulla eu lacus suscipit, id facilisis lorem ultricies.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent at ante gravida, finibus magna non, faucibus mauris. Nulla ut diam et purus varius commodo id at magna. Donec aliquet nulla eu lacus suscipit, id facilisis lorem ultricies.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent at ante gravida, finibus magna non, faucibus mauris. Nulla ut diam et purus varius commodo id at magna. Donec aliquet nulla eu lacus suscipit, id facilisis lorem ultricies.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent at ante gravida, finibus magna non, faucibus mauris. Nulla ut diam et purus varius commodo id at magna. Donec aliquet nulla eu lacus suscipit, id facilisis lorem ultricies.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent at ante gravida, finibus magna non, faucibus mauris. Nulla ut diam et purus varius commodo id at magna. Donec aliquet nulla eu lacus suscipit, id facilisis lorem ultricies.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent at ante gravida, finibus magna non, faucibus mauris. Nulla ut diam et purus varius commodo id at magna. Donec aliquet nulla eu lacus suscipit, id facilisis lorem ultricies.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent at ante gravida, finibus magna non, faucibus mauris. Nulla ut diam et purus varius commodo id at magna. Donec aliquet nulla eu lacus suscipit, id facilisis lorem ultricies.</p>
                    <p><i class="mdi-action-perm-identity "></i> Rama SOUMARE</p>
                    <p><i class="mdi-communication-business "></i> 256 cours emile zola villeurbanne 69100</p>
                    <p><i class="mdi-action-perm-phone-msg "></i> 04 76 67 87 56</p>
                    <p><i class="mdi-communication-email "></i> support@biblioo.com</p>
                </div>
            </div>
          </div>
        </div>
        <!--end container-->
      </section>
      <!-- END CONTENT -->

      <!-- //////////////////////////////////////////////////////////////////////////// -->
      <!-- START RIGHT SIDEBAR NAV-->
      <aside id="right-sidebar-nav">
        <ul id="chat-out" class="side-nav rightside-navigation">
            <li class="li-hover">
            <a href="#" data-activates="chat-out" class="chat-close-collapse right"><i class="mdi-navigation-close"></i></a>
            <div id="right-search" class="row">
                <form class="col s12">
                    <div class="input-field">
                        <i class="mdi-action-search prefix"></i>
                        <input id="icon_prefix" type="text" class="validate">
                        <label for="icon_prefix">Search</label>
                    </div>
                </form>
            </div>
            </li>
            <li class="li-hover">
                <ul class="chat-collapsible" data-collapsible="expandable">
                <li>
                    <div class="collapsible-header teal white-text active"><i class="mdi-social-whatshot"></i>Recent Activity</div>
                    <div class="collapsible-body recent-activity">
                        <div class="recent-activity-list chat-out-list row">
                            <div class="col s3 recent-activity-list-icon"><i class="mdi-action-add-shopping-cart"></i>
                            </div>
                            <div class="col s9 recent-activity-list-text">
                                <a href="#">just now</a>
                                <p>Jim Doe Purchased new equipments for zonal office.</p>
                            </div>
                        </div>
                        <div class="recent-activity-list chat-out-list row">
                            <div class="col s3 recent-activity-list-icon"><i class="mdi-device-airplanemode-on"></i>
                            </div>
                            <div class="col s9 recent-activity-list-text">
                                <a href="#">Yesterday</a>
                                <p>Your Next flight for USA will be on 15th August 2015.</p>
                            </div>
                        </div>
                        <div class="recent-activity-list chat-out-list row">
                            <div class="col s3 recent-activity-list-icon"><i class="mdi-action-settings-voice"></i>
                            </div>
                            <div class="col s9 recent-activity-list-text">
                                <a href="#">5 Days Ago</a>
                                <p>Natalya Parker Send you a voice mail for next conference.</p>
                            </div>
                        </div>
                        <div class="recent-activity-list chat-out-list row">
                            <div class="col s3 recent-activity-list-icon"><i class="mdi-action-store"></i>
                            </div>
                            <div class="col s9 recent-activity-list-text">
                                <a href="#">Last Week</a>
                                <p>Jessy Jay open a new store at S.G Road.</p>
                            </div>
                        </div>
                        <div class="recent-activity-list chat-out-list row">
                            <div class="col s3 recent-activity-list-icon"><i class="mdi-action-settings-voice"></i>
                            </div>
                            <div class="col s9 recent-activity-list-text">
                                <a href="#">5 Days Ago</a>
                                <p>Natalya Parker Send you a voice mail for next conference.</p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header light-blue white-text active"><i class="mdi-editor-attach-money"></i>Sales Repoart</div>
                    <div class="collapsible-body sales-repoart">
                        <div class="sales-repoart-list  chat-out-list row">
                            <div class="col s8">Target Salse</div>
                            <div class="col s4"><span id="sales-line-1"></span>
                            </div>
                        </div>
                        <div class="sales-repoart-list chat-out-list row">
                            <div class="col s8">Payment Due</div>
                            <div class="col s4"><span id="sales-bar-1"></span>
                            </div>
                        </div>
                        <div class="sales-repoart-list chat-out-list row">
                            <div class="col s8">Total Delivery</div>
                            <div class="col s4"><span id="sales-line-2"></span>
                            </div>
                        </div>
                        <div class="sales-repoart-list chat-out-list row">
                            <div class="col s8">Total Progress</div>
                            <div class="col s4"><span id="sales-bar-2"></span>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header red white-text"><i class="mdi-action-stars"></i>Favorite Associates</div>
                    <div class="collapsible-body favorite-associates">
                        <div class="favorite-associate-list chat-out-list row">
                            <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img online-user valign profile-image">
                            </div>
                            <div class="col s8">
                                <p>Eileen Sideways</p>
                                <p class="place">Los Angeles, CA</p>
                            </div>
                        </div>
                        <div class="favorite-associate-list chat-out-list row">
                            <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img online-user valign profile-image">
                            </div>
                            <div class="col s8">
                                <p>Zaham Sindil</p>
                                <p class="place">San Francisco, CA</p>
                            </div>
                        </div>
                        <div class="favorite-associate-list chat-out-list row">
                            <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img offline-user valign profile-image">
                            </div>
                            <div class="col s8">
                                <p>Renov Leongal</p>
                                <p class="place">Cebu City, Philippines</p>
                            </div>
                        </div>
                        <div class="favorite-associate-list chat-out-list row">
                            <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img online-user valign profile-image">
                            </div>
                            <div class="col s8">
                                <p>Weno Carasbong</p>
                                <p>Tokyo, Japan</p>
                            </div>
                        </div>
                        <div class="favorite-associate-list chat-out-list row">
                            <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img offline-user valign profile-image">
                            </div>
                            <div class="col s8">
                                <p>Nusja Nawancali</p>
                                <p class="place">Bangkok, Thailand</p>
                            </div>
                        </div>
                    </div>
                </li>
                </ul>
            </li>
        </ul>
      </aside>


       <?php include('footer.php');?>
