<!--begin::Modal - Create New-->
<div class="modal fade" id="external_create_new" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Form-->
            <form class="form" action="<?= base_url(); ?>/product_category/create" method="post" id="kt_modal_new_address_form">
                <input type="hidden" name="type" value="<?= $type ?>" >   
                <input type="hidden" name="id"id="externalID"  >   
            <!--begin::Modal header-->
                <div class="modal-header" id="kt_modal_new_address_header">
                    <!--begin::Modal title-->
                    <h2 class="text-dark" id="modalTitle">Création d'une <?= productParams()[$type]["externalName"] ?></h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body py-10 px-lg-17">
                    <!--begin::Scroll-->
                    <div class="scroll-y me-n7 pe-7" id="kt_modal_new_address_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_new_address_header" data-kt-scroll-wrappers="#kt_modal_new_address_scroll" data-kt-scroll-offset="300px">
                        <div id="infoMessage" style="color:red;">
                            <?=  session()->has('message2') ? (session()->get('message2')) : ("")?>
                        </div>
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-5 fv-row  text-dark">
                            <!--begin::Label-->
                            <label class="fs-5 fw-bold mb-2">Désignation</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input class="form-control form-control-solid" placeholder="" name="name"  type="text" id="name" required/>
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-5 fv-row  text-dark">
                             <!--end::Label-->
                             <label class="fw-bolder text-dark fs-6 mb-2">Description</label>
                            <!--end::Label-->
                            <!--end::Input-->
                            <textarea class="form-control form-control-solid" placeholder="Brève description ici..." name="description" ></textarea>
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                    </div>
                    <!--end::Scroll-->
                </div>
                <!--end::Modal body-->
                <!--begin::Modal footer-->
                <div class="modal-footer flex-center">
                    <!--begin::Button-->
                    <button type="reset" id="kt_modal_new_address_cancel" class="btn btn-danger me-3">Quitter</button>
                    <!--end::Button-->
                    <!--begin::Button-->
                    <button type="submit" id="kt_modal_new_address_submit" class="btn btn-primary">
                        <span class="indicator-label" id="submitText">Enregistrer</span>
                        <span class="indicator-progress">Patientez...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                    <!--end::Button-->
                </div>
                <!--end::Modal footer-->
            </form>
            <!--end::Form-->
        </div>
    </div>
</div>
<!--end::Modal - Create New-->