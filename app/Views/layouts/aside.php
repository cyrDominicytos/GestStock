<!--begin::Aside-->
<div id="kt_aside" class="aside aside-dark aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
					<!--begin::Brand-->
					<div class="aside-logo flex-column-auto" id="kt_aside_logo">
						<!--begin::Logo-->
						<a href="">
							<img alt="Logo" src="<?= base_url(); ?>/public/assets/media/logos/logo-demo13.sv" class="h-15px logo" />
						</a>
						<!--end::Logo-->
						<!--begin::Aside toggler-->
						<div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="aside-minimize">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr074.svg-->
							<span class="svg-icon svg-icon-1 rotate-180">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<path d="M11.2657 11.4343L15.45 7.25C15.8642 6.83579 15.8642 6.16421 15.45 5.75C15.0358 5.33579 14.3642 5.33579 13.95 5.75L8.40712 11.2929C8.01659 11.6834 8.01659 12.3166 8.40712 12.7071L13.95 18.25C14.3642 18.6642 15.0358 18.6642 15.45 18.25C15.8642 17.8358 15.8642 17.1642 15.45 16.75L11.2657 12.5657C10.9533 12.2533 10.9533 11.7467 11.2657 11.4343Z" fill="black" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Aside toggler-->
					</div>
					<!--end::Brand-->
					<!--begin::Aside menu-->
					<div class="aside-menu flex-column-fluid">
						<!--begin::Aside Menu-->
						<div class="hover-scroll-overlay-y my-2 py-5 py-lg-8" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="0">
							<!--begin::Menu-->
							<div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true">
								<div class="menu-item menu-accordion">
                                    <a class="menu-link" href="<?= base_url() ?>/">
										<span class="menu-icon">
											<i class="bi bi-grid fs-3"></i>
										</span>
										<span class="menu-title">Tableau de bord</span>
									</a>
								</div>
                               
								<div class="menu-item">
									<div class="menu-content pt-8 pb-2">
										<span class="menu-sectio text-muted text-uppercase fs-8 ls-1"  style="color: #fff;">Fonctionnalités</span>
									</div>
								</div>
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<span class="menu-link">
										<span class="menu-icon">
											<i class="bi bi-archive fs-3"></i>
										</span>
										<span class="menu-title">Ventes</span>
										<span class="menu-arrow"></span>
									</span>
									<div class="menu-sub menu-sub-accordion menu-active-bg">
										<div class="menu-item menu-accordion">
                                            <a class="menu-link" href="<?= base_url() ?>/">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Ajouter</span>
											</a>
                                            <a class="menu-link" href="<?= base_url() ?>/">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Consulter liste</span>
											</a>
										</div>
									</div>
								</div>
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<span class="menu-link">
										<span class="menu-icon">
											<i class="bi bi-archive fs-3"></i>
										</span>
										<span class="menu-title">Commandes clients</span>
										<span class="menu-arrow"></span>
									</span>
									<div class="menu-sub menu-sub-accordion menu-active-bg">
										<div class="menu-item menu-accordion">
                                            <a class="menu-link" href="<?= base_url() ?>/">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title" >Ajouter</span>
											</a>
                                            <a class="menu-link" href="<?= base_url() ?>/">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Consulter liste</span>
                                            </a>
										</div>
									</div>
								</div>
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <span class="menu-link">
                                        <span class="menu-icon">
                                            <i class="bi bi-archive fs-3"></i>
										</span>
										<span class="menu-title">Approvisionnements</span>
										<span class="menu-arrow"></span>
									</span>
									<div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item menu-accordion">
                                            <a class="menu-link" href="<?= base_url() ?>/">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title" >Ajouter</span>
                                            </a>
                                            <a class="menu-link" href="<?= base_url() ?>/">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Consulter liste</span>
                                            </a>
										</div>
									</div>
                                    <div class="menu-item menu-accordion">
                                        <a class="menu-link" href="<?= base_url() ?>/">
                                            <span class="menu-icon">
                                                <i class="bi bi-grid fs-3"></i>
                                            </span>
                                            <span class="menu-title">Inventaire du stock</span>
                                        </a>
                                    </div>
                                    <!-- Admin -->
                                    <div class="menu-item">
                                        <div class="menu-content pt-8 pb-2">
                                            <span class="menu-sectio text-muted text-uppercase fs-8 ls-1"  style="color: #fff;">Administration</span>
                                        </div>
                                    </div>
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <span class="menu-link">
                                            <span class="menu-icon">
                                                <i class="bi bi-archive fs-3"></i>
                                            </span>
                                            <span class="menu-title">Options de vente</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                        <div class="menu-sub menu-sub-accordion menu-active-bg">
                                            <div class="menu-item menu-accordion">
                                                <a class="menu-link" href="<?= base_url() ?>/">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title" >Ajouter</span>
                                                </a>
                                                <a class="menu-link" href="<?= base_url() ?>/">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Consulter liste</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <span class="menu-link">
                                            <span class="menu-icon">
                                                <i class="bi bi-archive fs-3"></i>
                                            </span>
                                            <span class="menu-title">Produits</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                        <div class="menu-sub menu-sub-accordion menu-active-bg">
                                            <div class="menu-item menu-accordion">
                                                <a class="menu-link" href="<?= base_url() ?>/">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title" >Ajouter</span>
                                                </a>
                                                <a class="menu-link" href="<?= base_url() ?>/">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title ">Consulter liste</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <span class="menu-link">
                                            <span class="menu-icon">
                                                <i class="bi bi-archive fs-3"></i>
                                            </span>
                                            <span class="menu-title">Clients</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                        <div class="menu-sub menu-sub-accordion menu-active-bg">
                                            <div class="menu-item menu-accordion">
                                                <a class="menu-link" href="<?= base_url() ?>/client/list_create">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title" >Ajouter</span>
                                                </a>
                                                <a class="menu-link" href="<?= base_url() ?>/client/list">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Consulter liste</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <span class="menu-link">
                                            <span class="menu-icon">
                                                <i class="bi bi-archive fs-3"></i>
                                            </span>
                                            <span class="menu-title">Fournisseurs</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                        <div class="menu-sub menu-sub-accordion menu-active-bg">
                                            <div class="menu-item menu-accordion">
                                                <a class="menu-link" href="<?= base_url() ?>/fournisseur/list_create">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title" >Ajouter</span>
                                                </a>
                                                <a class="menu-link" href="<?= base_url() ?>/fournisseur/list">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Consulter liste</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <span class="menu-link">
                                            <span class="menu-icon">
                                                <i class="bi bi-archive fs-3"></i>
                                            </span>
                                            <span class="menu-title">Nos Livreurs</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                        <div class="menu-sub menu-sub-accordion menu-active-bg">
                                            <div  class="menu-item menu-accordion">
                                                <a class="menu-link" href="<?= base_url() ?>/livreur/list_create">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title" >Ajouter</span>
                                                </a>
                                                <a class="menu-link" href="<?= base_url() ?>/livreur/list">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Consulter liste</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <span class="menu-link">
                                            <span class="menu-icon">
                                                <i class="fa fa-user fs-3"></i>
                                            </span>
                                            <span class="menu-title">Utilisateurs</span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                        <div class="menu-sub menu-sub-accordion menu-active-bg">
                                            <div class="menu-item menu-accordion">
                                                <a class="menu-link" href="<?= base_url() ?>/register">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title" >Ajouter</span>
                                                </a>
                                                <a class="menu-link" href="<?= base_url() ?>/users/list">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Consulter liste</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <span class="menu-link">
                                            <span class="menu-icon">
                                                <i class="bi bi-gear fs-3"></i>
                                            </span>
                                            <span class="menu-title">Rôles et   Permissions </span>
                                            <span class="menu-arrow"></span>
                                        </span>
                                        <div class="menu-sub menu-sub-accordion menu-active-bg">
                                            <div class="menu-item menu-accordion">
                                                <a class="menu-link" href="<?= base_url() ?>/groups/new">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title" >Ajouter</span>
                                                </a>
                                                <a class="menu-link" href="<?= base_url() ?>/groups/list">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">Consulter liste</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="menu-item menu-accordion">
                                        <a class="menu-link" href="<?= base_url() ?>/">
                                            <span class="menu-icon">
                                                <i class="las la-tools fs-3"></i>
                                            </span>
                                            <span class="menu-title">Paramétrages</span>
                                         </a>
                                    </div>								
                                </div>
								</div>
							</div>
							<!--end::Menu-->
						</div>
					</div>
					<!--end::Aside menu-->
					<!--begin::Footer
					<div class="aside-footer flex-column-auto pt-5 pb-7 px-5" id="kt_aside_footer">
						<a href="../../demo13/dist/documentation/getting-started.html" class="btn btn-custom btn-primary w-100" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss-="click" title="200+ in-house components and 3rd-party plugins">
							<span class="btn-label">Nous Contacter</span>
							
							<span class="svg-icon btn-icon svg-icon-2">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM12.5 18C12.5 17.4 12.6 17.5 12 17.5H8.5C7.9 17.5 8 17.4 8 18C8 18.6 7.9 18.5 8.5 18.5L12 18C12.6 18 12.5 18.6 12.5 18ZM16.5 13C16.5 12.4 16.6 12.5 16 12.5H8.5C7.9 12.5 8 12.4 8 13C8 13.6 7.9 13.5 8.5 13.5H15.5C16.1 13.5 16.5 13.6 16.5 13ZM12.5 8C12.5 7.4 12.6 7.5 12 7.5H8C7.4 7.5 7.5 7.4 7.5 8C7.5 8.6 7.4 8.5 8 8.5H12C12.6 8.5 12.5 8.6 12.5 8Z" fill="black" />
									<rect x="7" y="17" width="6" height="2" rx="1" fill="black" />
									<rect x="7" y="12" width="10" height="2" rx="1" fill="black" />
									<rect x="7" y="7" width="6" height="2" rx="1" fill="black" />
									<path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black" />
								</svg>
							</span>
							
						</a>
					</div>
					end::Footer-->
				</div>
				<!--end::Aside-->