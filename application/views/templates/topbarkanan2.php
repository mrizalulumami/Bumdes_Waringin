
                                           
                                                <!-- Nav Item - User Information -->
                                            <li class="nav-item dropdown no-arrow">
                                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $user['name']; ?></span>
                                                    <img class="img-profile rounded-circle"
                                                        src="<?= base_url('assets/img/profile/'). $user['image']; ?>" width="30" height="30">
                                                </a>
                                                <!-- Dropdown - User Information -->
                                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                                    aria-labelledby="userDropdown">
                                                    <a class="dropdown-item" href="<?=base_url('user');?>">
                                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                                        My Profile
                                                    </a>
                                                    <?php if ($user['role_id'] == 1) : ?>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="<?=base_url('admin');?>">
                                                         <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                                            Halaman Admin
                                                        </a>
                                                    <?php endif; ?>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>" data-toggle="modal"
                                                        data-target="#logoutModal">
                                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                                        Logout
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>