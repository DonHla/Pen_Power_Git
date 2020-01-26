
<?php include('block\head.html');?>
<body class="dashboard-page">

  <!-- <script src="assets\miniscript\shop.js"></script> -->
<!-- -------------- Body Wrap  -------------- -->
<div id="main">

  <?php include('block\header.html');?>

  <!-- -------------- Sidebar  -------------- -->
  <aside id="sidebar_left" class="nano nano-light affix">

      <!-- -------------- Sidebar Left Wrapper  -------------- -->
      <div class="sidebar-left-content nano-content">

<?php include('block\personmenu.html');?>

  <?php include('block\leftmenu.html');?>

    </aside>
    <!-- -------------- /Sidebar -------------- -->

    <!-- -------------- Main Wrapper -------------- -->
    <section id="content_wrapper">


  <?php include('block\help.html');?>


        <!-- -------------- Content -------------- -->
        <section id="content" class="table-layout animated fadeIn">
          <div kendo-list-view="listView" id="listView" k-data-source="dataSource" k-template="listViewTemplate" k-auto-bind="false" class="ng-scope k-widget k-listview" data-role="listview" role="listbox" style=""><div class="panel panel-default cssp-panelcard ng-scope" data-uid="2e8af168-5530-4a97-93f5-e53c5e68cda8" role="option" aria-selected="false">
                  <div class="panel-body">
                      <div class="row">
                          <div class="col-12 col-lg-8">
                              <div class="pb-5">
                                <h2 class="cssp-panelcard_heading">
                                      <a ui-sref="common.suppliers.emptyfilter.detail.view({id:dataItem.id})" class="ng-binding" href="#/suppliers/26626217">ООО «Брешь»</a>
                                  </h2>
                              </div>

                              <div class="pb-5 ng-binding">
                                  <p class="mb-3"><b>Тип поставщика</b></p>
                                  Юридическое лицо
                              </div>

                              <div class="row pb-5">
                                  <div class="col-12 col-sm-4 ng-binding">
                                      <p class="mb-3"><b>ИНН</b></p>
                                      1864746941
                                  </div>
                                  <div class="col-12 col-sm-4 pt-5 pt-sm-0 ng-binding" ng-show="dataItem.companyTypeId == enum.companyType.ul">
                                      <p class="mb-3"><b>КПП</b></p>
                                      773501001
                                  </div>
                                  <div class="col-12 col-sm-4 pt-5 pt-sm-0 ng-binding" ng-show="dataItem.companyTypeId == enum.companyType.ip || dataItem.companyTypeId == enum.companyType.ul">
                                      <p class="mb-3"><b class="ng-binding">ОГРН</b></p>
                                      5091754621404
                                  </div>
                              </div>
                          </div>

                          <div class="col-12 col-lg-4">
                              <div class="pb-5 pb-lg-3">
                                  <b>Статус:</b>
                                  <!-- ngIf: !dataItem.companyIsBlocked --><span ng-if="!dataItem.companyIsBlocked" class="ng-binding ng-scope"> Зарегистрирован</span><!-- end ngIf: !dataItem.companyIsBlocked -->
                                  <!-- ngIf: dataItem.companyIsBlocked -->
                              </div>

                              <!-- ngIf: dataItem.isPromCooperationCompany -->

                              <!--<cssp-rating rating="dataItem.rating"></cssp-rating>-->

                              <div class="pb-5 pb-lg-3 text-nowrap">
                                  <b>Исполненных контрактов:</b>
                                  <span ng-show="(dataItem.contractExecutedCount || 0) == 0" class="">0</span>
                                  <a ng-show="(dataItem.contractExecutedCount || 0) > 0" ng-click="showContracts(dataItem, [6])" class="ng-binding ng-hide"></a>
                              </div>

                              <div class="pb-5 pb-lg-3 text-nowrap">
                                  <b>Расторгнутых контрактов:</b>
                                  <span ng-show="(dataItem.contractTerminatedCount || 0) == 0" class="">0</span>
                                  <a ng-show="(dataItem.contractTerminatedCount || 0) > 0" ng-click="showContracts(dataItem, [7])" class="ng-binding ng-hide"></a>
                              </div>
                              <div class="pb-5 pb-lg-3 text-nowrap">
                                  <a ng-click="showContracts(dataItem, [5])">Активные обязательства</a>
                              </div>
                              <!-- ngIf: showLinkSetTrusted || isOfferAuction -->

                              <!-- ngIf: canAllUsers || canOwnUsers && dataItem.id == currentSupplierId -->

                              <!-- ngIf: dataItem.hasTrustedAreas -->

                              <!-- ngIf: showLinkSetTrusted -->

                              <!-- ngIf: canBlockSupplier -->
                              <div>
                                  <i class="fa fa-id-card mr-3 img" ng-show="showRegister(dataItem)" title="Я зарегистрирован на Портале Поставщиков"></i>
                                  <img class="mr-3" src="assets\icon\patent.svg" height="30" ng-show="dataItem.companyIsSmallBusiness == true" title="Субъект малого предпринимательства">
                              </div>
                              <div class="custom-control t-3  custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label"  for="customCheck1">Отправить на сравнение</label>
                              </div>

                          </div>
                      </div>
                  </div>
              </div>
              <div class="panel panel-default cssp-panelcard ng-scope" data-uid="cac0b6ac-0a81-48ce-a37a-f3c2a6d6ae09" role="option" aria-selected="false">
                  <div class="panel-body">
                      <div class="row">
                          <div class="col-12 col-lg-8">
                              <div class="pb-5">
                                  <h2 class="cssp-panelcard_heading">
                                      <a ui-sref="common.suppliers.emptyfilter.detail.view({id:dataItem.id})" class="ng-binding" href="#/suppliers/26626106">ООО «1000 мелочей»</a>
                                  </h2>
                              </div>

                              <div class="pb-5 ng-binding">
                                  <p class="mb-3"><b>Тип поставщика</b></p>
                                  Юридическое лицо
                              </div>

                              <div class="row pb-5">
                                  <div class="col-12 col-sm-4 ng-binding">
                                      <p class="mb-3"><b>ИНН</b></p>
                                      5485313500
                                  </div>
                                  <div class="col-12 col-sm-4 pt-5 pt-sm-0 ng-binding" ng-show="dataItem.companyTypeId == enum.companyType.ul">
                                      <p class="mb-3"><b>КПП</b></p>
                                      543301630
                                  </div>
                                  <div class="col-12 col-sm-4 pt-5 pt-sm-0 ng-binding" ng-show="dataItem.companyTypeId == enum.companyType.ip || dataItem.companyTypeId == enum.companyType.ul">
                                      <p class="mb-3"><b class="ng-binding">ОГРН</b></p>
                                      1152159805126
                                  </div>
                              </div>
                          </div>

                          <div class="col-12 col-lg-4">
                              <div class="pb-5 pb-lg-3">
                                  <b>Статус:</b>
                                  <!-- ngIf: !dataItem.companyIsBlocked --><span ng-if="!dataItem.companyIsBlocked" class="ng-binding ng-scope"> Зарегистрирован</span><!-- end ngIf: !dataItem.companyIsBlocked -->
                                  <!-- ngIf: dataItem.companyIsBlocked -->
                              </div>

                              <!-- ngIf: dataItem.isPromCooperationCompany -->

                              <!--<cssp-rating rating="dataItem.rating"></cssp-rating>-->

                              <div class="pb-5 pb-lg-3 text-nowrap">
                                  <b>Исполненных контрактов:</b>
                                  <span ng-show="(dataItem.contractExecutedCount || 0) == 0" class="">0</span>
                                  <a ng-show="(dataItem.contractExecutedCount || 0) > 0" ng-click="showContracts(dataItem, [6])" class="ng-binding ng-hide"></a>
                              </div>

                              <div class="pb-5 pb-lg-3 text-nowrap">
                                  <b>Расторгнутых контрактов:</b>
                                  <span ng-show="(dataItem.contractTerminatedCount || 0) == 0" class="">0</span>
                                  <a ng-show="(dataItem.contractTerminatedCount || 0) > 0" ng-click="showContracts(dataItem, [7])" class="ng-binding ng-hide"></a>
                              </div>
                              <div class="pb-5 pb-lg-3 text-nowrap">
                                  <a ng-click="showContracts(dataItem, [5])">Активные обязательства</a>
                              </div>
                              <!-- ngIf: showLinkSetTrusted || isOfferAuction -->

                              <!-- ngIf: canAllUsers || canOwnUsers && dataItem.id == currentSupplierId -->

                              <!-- ngIf: dataItem.hasTrustedAreas -->

                              <!-- ngIf: showLinkSetTrusted -->

                              <!-- ngIf: canBlockSupplier -->
                              <div>
                                  <i class="fa fa-id-card mr-3 img" ng-show="showRegister(dataItem)" title="Я зарегистрирован на Портале Поставщиков"></i>
                                  <img class="mr-3" src="assets\icon\patent.svg" height="30" ng-show="dataItem.companyIsSmallBusiness == true" title="Субъект малого предпринимательства">
                              </div>
                              <div class="custom-control t-3  custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label"  for="customCheck1">Отправить на сравнение</label>
                              </div>
                          </div>
                      </div>
                  </div>
              </div><div class="panel panel-default cssp-panelcard ng-scope" data-uid="69fccb14-676c-4592-962d-461dff277b39" role="option" aria-selected="false">
                  <div class="panel-body">
                      <div class="row">
                          <div class="col-12 col-lg-8">
                              <div class="pb-5">
                                  <h2 class="cssp-panelcard_heading">
                                      <a ui-sref="common.suppliers.emptyfilter.detail.view({id:dataItem.id})" class="ng-binding" href="#/suppliers/26625666">Гутров Егор Дмитриевич</a>
                                  </h2>
                              </div>

                              <div class="pb-5 ng-binding">
                                  <p class="mb-3"><b>Тип поставщика</b></p>
                                  Юридическое лицо
                              </div>

                              <div class="row pb-5">
                                  <div class="col-12 col-sm-4 ng-binding">
                                      <p class="mb-3"><b>ИНН</b></p>
                                      631701761642
                                  </div>
                                  <div class="col-12 col-sm-4 pt-5 pt-sm-0 ng-binding" ng-show="dataItem.companyTypeId == enum.companyType.ul">
                                      <p class="mb-3"><b>КПП</b></p>

                                  </div>
                                  <div class="col-12 col-sm-4 pt-5 pt-sm-0 ng-binding" ng-show="dataItem.companyTypeId == enum.companyType.ip || dataItem.companyTypeId == enum.companyType.ul">
                                      <p class="mb-3"><b class="ng-binding">ОГРН</b></p>

                                  </div>
                              </div>
                          </div>

                          <div class="col-12 col-lg-4">
                              <div class="pb-5 pb-lg-3">
                                  <b>Статус:</b>
                                  <!-- ngIf: !dataItem.companyIsBlocked --><span ng-if="!dataItem.companyIsBlocked" class="ng-binding ng-scope"> Зарегистрирован</span><!-- end ngIf: !dataItem.companyIsBlocked -->
                                  <!-- ngIf: dataItem.companyIsBlocked -->
                              </div>

                              <!-- ngIf: dataItem.isPromCooperationCompany -->

                              <!--<cssp-rating rating="dataItem.rating"></cssp-rating>-->

                              <div class="pb-5 pb-lg-3 text-nowrap">
                                  <b>Исполненных контрактов:</b>
                                  <span ng-show="(dataItem.contractExecutedCount || 0) == 0" class="">0</span>
                                  <a ng-show="(dataItem.contractExecutedCount || 0) > 0" ng-click="showContracts(dataItem, [6])" class="ng-binding ng-hide"></a>
                              </div>

                              <div class="pb-5 pb-lg-3 text-nowrap">
                                  <b>Расторгнутых контрактов:</b>
                                  <span ng-show="(dataItem.contractTerminatedCount || 0) == 0" class="">0</span>
                                  <a ng-show="(dataItem.contractTerminatedCount || 0) > 0" ng-click="showContracts(dataItem, [7])" class="ng-binding ng-hide"></a>
                              </div>
                              <div class="pb-5 pb-lg-3 text-nowrap">
                                  <a ng-click="showContracts(dataItem, [5])">Активные обязательства</a>
                              </div>
                              <!-- ngIf: showLinkSetTrusted || isOfferAuction -->

                              <!-- ngIf: canAllUsers || canOwnUsers && dataItem.id == currentSupplierId -->

                              <!-- ngIf: dataItem.hasTrustedAreas -->

                              <!-- ngIf: showLinkSetTrusted -->

                              <!-- ngIf: canBlockSupplier -->

                          </div>
                      </div>
                  </div>
              </div><div class="panel panel-default cssp-panelcard ng-scope" data-uid="721b80ba-03de-4a4f-ac01-622c6964049a" role="option" aria-selected="false">
                  <div class="panel-body">
                      <div class="row">
                          <div class="col-12 col-lg-8">
                              <div class="pb-5">
                                  <h2 class="cssp-panelcard_heading">
                                      <a ui-sref="common.suppliers.emptyfilter.detail.view({id:dataItem.id})" class="ng-binding" href="#/suppliers/26624676">Вигель Александра Юрьевна</a>
                                  </h2>
                              </div>

                              <div class="pb-5 ng-binding">
                                  <p class="mb-3"><b>Тип поставщика</b></p>
                                  Юридическое лицо
                              </div>

                              <div class="row pb-5">
                                  <div class="col-12 col-sm-4 ng-binding">
                                      <p class="mb-3"><b>ИНН</b></p>
                                      500312270422
                                  </div>
                                  <div class="col-12 col-sm-4 pt-5 pt-sm-0 ng-binding" ng-show="dataItem.companyTypeId == enum.companyType.ul">
                                      <p class="mb-3"><b>КПП</b></p>

                                  </div>
                                  <div class="col-12 col-sm-4 pt-5 pt-sm-0 ng-binding" ng-show="dataItem.companyTypeId == enum.companyType.ip || dataItem.companyTypeId == enum.companyType.ul">
                                      <p class="mb-3"><b class="ng-binding">ОГРН</b></p>

                                  </div>
                              </div>
                          </div>

                          <div class="col-12 col-lg-4">
                              <div class="pb-5 pb-lg-3">
                                  <b>Статус:</b>
                                  <!-- ngIf: !dataItem.companyIsBlocked --><span ng-if="!dataItem.companyIsBlocked" class="ng-binding ng-scope"> Зарегистрирован</span><!-- end ngIf: !dataItem.companyIsBlocked -->
                                  <!-- ngIf: dataItem.companyIsBlocked -->
                              </div>

                              <!-- ngIf: dataItem.isPromCooperationCompany -->

                              <!--<cssp-rating rating="dataItem.rating"></cssp-rating>-->

                              <div class="pb-5 pb-lg-3 text-nowrap">
                                  <b>Исполненных контрактов:</b>
                                  <span ng-show="(dataItem.contractExecutedCount || 0) == 0" class="">0</span>
                                  <a ng-show="(dataItem.contractExecutedCount || 0) > 0" ng-click="showContracts(dataItem, [6])" class="ng-binding ng-hide"></a>
                              </div>

                              <div class="pb-5 pb-lg-3 text-nowrap">
                                  <b>Расторгнутых контрактов:</b>
                                  <span ng-show="(dataItem.contractTerminatedCount || 0) == 0" class="">0</span>
                                  <a ng-show="(dataItem.contractTerminatedCount || 0) > 0" ng-click="showContracts(dataItem, [7])" class="ng-binding ng-hide"></a>
                              </div>
                              <div class="pb-5 pb-lg-3 text-nowrap">
                                  <a ng-click="showContracts(dataItem, [5])">Активные обязательства</a>
                              </div>
                              <!-- ngIf: showLinkSetTrusted || isOfferAuction -->

                              <!-- ngIf: canAllUsers || canOwnUsers && dataItem.id == currentSupplierId -->

                              <!-- ngIf: dataItem.hasTrustedAreas -->

                              <!-- ngIf: showLinkSetTrusted -->

                              <!-- ngIf: canBlockSupplier -->

                          </div>
                      </div>
                  </div>
              </div><div class="panel panel-default cssp-panelcard ng-scope" data-uid="d6f40c8e-69a9-4a86-a546-fe15e056699a" role="option" aria-selected="false">
                  <div class="panel-body">
                      <div class="row">
                          <div class="col-12 col-lg-8">
                              <div class="pb-5">
                                  <h2 class="cssp-panelcard_heading">
                                      <a ui-sref="common.suppliers.emptyfilter.detail.view({id:dataItem.id})" class="ng-binding" href="#/suppliers/26624348">ГАУ МЦОП</a>
                                  </h2>
                              </div>

                              <div class="pb-5 ng-binding">
                                  <p class="mb-3"><b>Тип поставщика</b></p>
                                  Юридическое лицо
                              </div>

                              <div class="row pb-5">
                                  <div class="col-12 col-sm-4 ng-binding">
                                      <p class="mb-3"><b>ИНН</b></p>
                                      7719237820
                                  </div>
                                  <div class="col-12 col-sm-4 pt-5 pt-sm-0 ng-binding" ng-show="dataItem.companyTypeId == enum.companyType.ul">
                                      <p class="mb-3"><b>КПП</b></p>
                                      770301001
                                  </div>
                                  <div class="col-12 col-sm-4 pt-5 pt-sm-0 ng-binding" ng-show="dataItem.companyTypeId == enum.companyType.ip || dataItem.companyTypeId == enum.companyType.ul">
                                      <p class="mb-3"><b class="ng-binding">ОГРН</b></p>
                                      1037739013256
                                  </div>
                              </div>
                          </div>

                          <div class="col-12 col-lg-4">
                              <div class="pb-5 pb-lg-3">
                                  <b>Статус:</b>
                                  <!-- ngIf: !dataItem.companyIsBlocked --><span ng-if="!dataItem.companyIsBlocked" class="ng-binding ng-scope"> Зарегистрирован</span><!-- end ngIf: !dataItem.companyIsBlocked -->
                                  <!-- ngIf: dataItem.companyIsBlocked -->
                              </div>

                              <!-- ngIf: dataItem.isPromCooperationCompany -->

                              <!--<cssp-rating rating="dataItem.rating"></cssp-rating>-->

                              <div class="pb-5 pb-lg-3 text-nowrap">
                                  <b>Исполненных контрактов:</b>
                                  <span ng-show="(dataItem.contractExecutedCount || 0) == 0" class="">0</span>
                                  <a ng-show="(dataItem.contractExecutedCount || 0) > 0" ng-click="showContracts(dataItem, [6])" class="ng-binding ng-hide"></a>
                              </div>

                              <div class="pb-5 pb-lg-3 text-nowrap">
                                  <b>Расторгнутых контрактов:</b>
                                  <span ng-show="(dataItem.contractTerminatedCount || 0) == 0" class="">0</span>
                                  <a ng-show="(dataItem.contractTerminatedCount || 0) > 0" ng-click="showContracts(dataItem, [7])" class="ng-binding ng-hide"></a>
                              </div>
                              <div class="pb-5 pb-lg-3 text-nowrap">
                                  <a ng-click="showContracts(dataItem, [5])">Активные обязательства</a>
                              </div>
                              <!-- assets\icon\patent.svg" -->
                              <!-- ngIf: showLinkSetTrusted || isOfferAuction -->

                              <!-- ngIf: canAllUsers || canOwnUsers && dataItem.id == currentSupplierId -->

                              <!-- ngIf: dataItem.hasTrustedAreas -->

                              <!-- ngIf: showLinkSetTrusted -->

                              <!-- ngIf: canBlockSupplier -->
                              <div>
                                  <i class="fa fa-id-card mr-3 img" ng-show="showRegister(dataItem)" title="Я зарегистрирован на Портале Поставщиков"></i>
                                  <img class="mr-3" src="assets\icon\patent.svg" height="30" ng-show="dataItem.companyIsSmallBusiness == true" title="Субъект малого предпринимательства">
                              </div>
                              <div class="custom-control t-3  custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label"  for="customCheck1">Отправить на сравнение</label>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="panel panel-default cssp-panelcard ng-scope" data-uid="5a4a71b0-73f4-43f9-bb35-889ac725c0f1" role="option" aria-selected="false">
                  <div class="panel-body">
                      <div class="row">
                          <div class="col-12 col-lg-8">
                              <div class="pb-5">
                                  <h2 class="cssp-panelcard_heading">
                                      <a ui-sref="common.suppliers.emptyfilter.detail.view({id:dataItem.id})" class="ng-binding" href="#/suppliers/26624347">Титова Ольга Анатольевна</a>
                                  </h2>
                              </div>

                              <div class="pb-5 ng-binding">
                                  <p class="mb-3"><b>Тип поставщика</b></p>
                                  Юридическое лицо
                              </div>

                              <div class="row pb-5">
                                  <div class="col-12 col-sm-4 ng-binding">
                                      <p class="mb-3"><b>ИНН</b></p>
                                      772391144911
                                  </div>
                                  <div class="col-12 col-sm-4 pt-5 pt-sm-0 ng-binding" ng-show="dataItem.companyTypeId == enum.companyType.ul">
                                      <p class="mb-3"><b>КПП</b></p>

                                  </div>
                                  <div class="col-12 col-sm-4 pt-5 pt-sm-0 ng-binding" ng-show="dataItem.companyTypeId == enum.companyType.ip || dataItem.companyTypeId == enum.companyType.ul">
                                      <p class="mb-3"><b class="ng-binding">ОГРН</b></p>

                                  </div>
                              </div>
                          </div>

                          <div class="col-12 col-lg-4">
                              <div class="pb-5 pb-lg-3">
                                  <b>Статус:</b>
                                  <!-- ngIf: !dataItem.companyIsBlocked --><span ng-if="!dataItem.companyIsBlocked" class="ng-binding ng-scope"> Зарегистрирован</span><!-- end ngIf: !dataItem.companyIsBlocked -->
                                  <!-- ngIf: dataItem.companyIsBlocked -->
                              </div>

                              <!-- ngIf: dataItem.isPromCooperationCompany -->

                              <!--<cssp-rating rating="dataItem.rating"></cssp-rating>-->

                              <div class="pb-5 pb-lg-3 text-nowrap">
                                  <b>Исполненных контрактов:</b>
                                  <span ng-show="(dataItem.contractExecutedCount || 0) == 0" class="">0</span>
                                  <a ng-show="(dataItem.contractExecutedCount || 0) > 0" ng-click="showContracts(dataItem, [6])" class="ng-binding ng-hide"></a>
                              </div>

                              <div class="pb-5 pb-lg-3 text-nowrap">
                                  <b>Расторгнутых контрактов:</b>
                                  <span ng-show="(dataItem.contractTerminatedCount || 0) == 0" class="">0</span>
                                  <a ng-show="(dataItem.contractTerminatedCount || 0) > 0" ng-click="showContracts(dataItem, [7])" class="ng-binding ng-hide"></a>
                              </div>
                              <div class="pb-5 pb-lg-3 text-nowrap">
                                  <a ng-click="showContracts(dataItem, [5])">Активные обязательства</a>
                              </div>
                              <!-- ngIf: showLinkSetTrusted || isOfferAuction -->

                              <!-- ngIf: canAllUsers || canOwnUsers && dataItem.id == currentSupplierId -->

                              <!-- ngIf: dataItem.hasTrustedAreas -->

                              <!-- ngIf: showLinkSetTrusted -->

                              <!-- ngIf: canBlockSupplier -->
                              <div>
                                  <i class="fa fa-id-card mr-3 img" ng-show="showRegister(dataItem)" title="Я зарегистрирован на Портале Поставщиков"></i>
                                  <img class="mr-3" src="assets\icon\patent.svg" height="30" ng-show="dataItem.companyIsSmallBusiness == true" title="Субъект малого предпринимательства">
                              </div>
                              <div class="custom-control t-3  custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label"  for="customCheck1">Отправить на сравнение</label>
                              </div>

                          </div>
                      </div>
                  </div>
              </div><div class="panel panel-default cssp-panelcard ng-scope" data-uid="74f0e7eb-0b06-4de8-a4cd-34c0c1db527f" role="option" aria-selected="false">
                  <div class="panel-body">
                      <div class="row">
                          <div class="col-12 col-lg-8">
                              <div class="pb-5">
                                  <h2 class="cssp-panelcard_heading">
                                      <a ui-sref="common.suppliers.emptyfilter.detail.view({id:dataItem.id})" class="ng-binding" href="#/suppliers/26624345">Общество с ограниченной ответственностью "Энергетика, Строительство, Автоматизация - Проект"</a>
                                  </h2>
                              </div>

                              <div class="pb-5 ng-binding">
                                  <p class="mb-3"><b>Тип поставщика</b></p>
                                  Юридическое лицо
                              </div>

                              <div class="row pb-5">
                                  <div class="col-12 col-sm-4 ng-binding">
                                      <p class="mb-3"><b>ИНН</b></p>
                                      5908998209
                                  </div>
                                  <div class="col-12 col-sm-4 pt-5 pt-sm-0 ng-binding" ng-show="dataItem.companyTypeId == enum.companyType.ul">
                                      <p class="mb-3"><b>КПП</b></p>
                                      590801001
                                  </div>
                                  <div class="col-12 col-sm-4 pt-5 pt-sm-0 ng-binding" ng-show="dataItem.companyTypeId == enum.companyType.ip || dataItem.companyTypeId == enum.companyType.ul">
                                      <p class="mb-3"><b class="ng-binding">ОГРН</b></p>
                                      1145958033781
                                  </div>
                              </div>
                          </div>

                          <div class="col-12 col-lg-4">
                              <div class="pb-5 pb-lg-3">
                                  <b>Статус:</b>
                                  <!-- ngIf: !dataItem.companyIsBlocked --><span ng-if="!dataItem.companyIsBlocked" class="ng-binding ng-scope"> Зарегистрирован</span><!-- end ngIf: !dataItem.companyIsBlocked -->
                                  <!-- ngIf: dataItem.companyIsBlocked -->
                              </div>

                              <!-- ngIf: dataItem.isPromCooperationCompany -->

                              <!--<cssp-rating rating="dataItem.rating"></cssp-rating>-->

                              <div class="pb-5 pb-lg-3 text-nowrap">
                                  <b>Исполненных контрактов:</b>
                                  <span ng-show="(dataItem.contractExecutedCount || 0) == 0" class="">0</span>
                                  <a ng-show="(dataItem.contractExecutedCount || 0) > 0" ng-click="showContracts(dataItem, [6])" class="ng-binding ng-hide"></a>
                              </div>

                              <div class="pb-5 pb-lg-3 text-nowrap">
                                  <b>Расторгнутых контрактов:</b>
                                  <span ng-show="(dataItem.contractTerminatedCount || 0) == 0" class="">0</span>
                                  <a ng-show="(dataItem.contractTerminatedCount || 0) > 0" ng-click="showContracts(dataItem, [7])" class="ng-binding ng-hide"></a>
                              </div>
                              <div class="pb-5 pb-lg-3 text-nowrap">
                                  <a ng-click="showContracts(dataItem, [5])">Активные обязательства</a>
                              </div>
                              <!-- ngIf: showLinkSetTrusted || isOfferAuction -->

                              <!-- ngIf: canAllUsers || canOwnUsers && dataItem.id == currentSupplierId -->

                              <!-- ngIf: dataItem.hasTrustedAreas -->

                              <!-- ngIf: showLinkSetTrusted -->

                              <!-- ngIf: canBlockSupplier -->
                              <div>
                                  <i class="fa fa-id-card mr-3 img" ng-show="showRegister(dataItem)" title="Я зарегистрирован на Портале Поставщиков"></i>
                                  <img class="mr-3" src="assets\icon\patent.svg" height="30" ng-show="dataItem.companyIsSmallBusiness == true" title="Субъект малого предпринимательства">
                              </div>
                          </div>
                      </div>
                  </div>
              </div><div class="panel panel-default cssp-panelcard ng-scope" data-uid="809ae775-67fa-4b29-a37f-103d9e0ba20d" role="option" aria-selected="false">
                  <div class="panel-body">
                      <div class="row">
                          <div class="col-12 col-lg-8">
                              <div class="pb-5">
                                  <h2 class="cssp-panelcard_heading">
                                      <a ui-sref="common.suppliers.emptyfilter.detail.view({id:dataItem.id})" class="ng-binding" href="#/suppliers/26624126">Общество с ограниченной ответственностью "МЭЛТОР"</a>
                                  </h2>
                              </div>

                              <div class="pb-5 ng-binding">
                                  <p class="mb-3"><b>Тип поставщика</b></p>
                                  Юридическое лицо
                              </div>

                              <div class="row pb-5">
                                  <div class="col-12 col-sm-4 ng-binding">
                                      <p class="mb-3"><b>ИНН</b></p>
                                      7203471801
                                  </div>
                                  <div class="col-12 col-sm-4 pt-5 pt-sm-0 ng-binding" ng-show="dataItem.companyTypeId == enum.companyType.ul">
                                      <p class="mb-3"><b>КПП</b></p>
                                      720301001
                                  </div>
                                  <div class="col-12 col-sm-4 pt-5 pt-sm-0 ng-binding" ng-show="dataItem.companyTypeId == enum.companyType.ip || dataItem.companyTypeId == enum.companyType.ul">
                                      <p class="mb-3"><b class="ng-binding">ОГРН</b></p>
                                      1197232003066
                                  </div>
                              </div>
                          </div>

                          <div class="col-12 col-lg-4">
                              <div class="pb-5 pb-lg-3">
                                  <b>Статус:</b>
                                  <!-- ngIf: !dataItem.companyIsBlocked --><span ng-if="!dataItem.companyIsBlocked" class="ng-binding ng-scope"> Зарегистрирован</span><!-- end ngIf: !dataItem.companyIsBlocked -->
                                  <!-- ngIf: dataItem.companyIsBlocked -->
                              </div>

                              <!-- ngIf: dataItem.isPromCooperationCompany -->

                              <!--<cssp-rating rating="dataItem.rating"></cssp-rating>-->

                              <div class="pb-5 pb-lg-3 text-nowrap">
                                  <b>Исполненных контрактов:</b>
                                  <span ng-show="(dataItem.contractExecutedCount || 0) == 0" class="">0</span>
                                  <a ng-show="(dataItem.contractExecutedCount || 0) > 0" ng-click="showContracts(dataItem, [6])" class="ng-binding ng-hide"></a>
                              </div>

                              <div class="pb-5 pb-lg-3 text-nowrap">
                                  <b>Расторгнутых контрактов:</b>
                                  <span ng-show="(dataItem.contractTerminatedCount || 0) == 0" class="">0</span>
                                  <a ng-show="(dataItem.contractTerminatedCount || 0) > 0" ng-click="showContracts(dataItem, [7])" class="ng-binding ng-hide"></a>
                              </div>
                              <div class="pb-5 pb-lg-3 text-nowrap">
                                  <a ng-click="showContracts(dataItem, [5])">Активные обязательства</a>
                              </div>
                              <!-- ngIf: showLinkSetTrusted || isOfferAuction -->

                              <!-- ngIf: canAllUsers || canOwnUsers && dataItem.id == currentSupplierId -->

                              <!-- ngIf: dataItem.hasTrustedAreas -->

                              <!-- ngIf: showLinkSetTrusted -->

                              <!-- ngIf: canBlockSupplier -->
                              <div>
                                  <i class="fa fa-id-card mr-3 img" ng-show="showRegister(dataItem)" title="Я зарегистрирован на Портале Поставщиков"></i>
                                  <img class="mr-3" src="assets\icon\patent.svg" height="30" ng-show="dataItem.companyIsSmallBusiness == true" title="Субъект малого предпринимательства">
                              </div>
                              <div class="custom-control t-3  custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label"  for="customCheck1">Отправить на сравнение</label>
                              </div>
                          </div>
                      </div>
                  </div>
              </div><div class="panel panel-default cssp-panelcard ng-scope" data-uid="994652a5-2746-4e70-8f48-1e97a7260b11" role="option" aria-selected="false">
                  <div class="panel-body">
                      <div class="row">
                          <div class="col-12 col-lg-8">
                              <div class="pb-5">
                                  <h2 class="cssp-panelcard_heading">
                                      <a ui-sref="common.suppliers.emptyfilter.detail.view({id:dataItem.id})" class="ng-binding" href="#/suppliers/26623905">Общества с ограниченной ответственностью ДОБРОДОМ</a>
                                  </h2>
                              </div>

                              <div class="pb-5 ng-binding">
                                  <p class="mb-3"><b>Тип поставщика</b></p>
                                  Юридическое лицо
                              </div>

                              <div class="row pb-5">
                                  <div class="col-12 col-sm-4 ng-binding">
                                      <p class="mb-3"><b>ИНН</b></p>
                                      4707040326
                                  </div>
                                  <div class="col-12 col-sm-4 pt-5 pt-sm-0 ng-binding" ng-show="dataItem.companyTypeId == enum.companyType.ul">
                                      <p class="mb-3"><b>КПП</b></p>
                                      470701001
                                  </div>
                                  <div class="col-12 col-sm-4 pt-5 pt-sm-0 ng-binding" ng-show="dataItem.companyTypeId == enum.companyType.ip || dataItem.companyTypeId == enum.companyType.ul">
                                      <p class="mb-3"><b class="ng-binding">ОГРН</b></p>
                                      1174704015738
                                  </div>
                              </div>
                          </div>

                          <div class="col-12 col-lg-4">
                              <div class="pb-5 pb-lg-3">
                                  <b>Статус:</b>
                                  <!-- ngIf: !dataItem.companyIsBlocked --><span ng-if="!dataItem.companyIsBlocked" class="ng-binding ng-scope"> Зарегистрирован</span><!-- end ngIf: !dataItem.companyIsBlocked -->
                                  <!-- ngIf: dataItem.companyIsBlocked -->
                              </div>

                              <!-- ngIf: dataItem.isPromCooperationCompany -->

                              <!--<cssp-rating rating="dataItem.rating"></cssp-rating>-->

                              <div class="pb-5 pb-lg-3 text-nowrap">
                                  <b>Исполненных контрактов:</b>
                                  <span ng-show="(dataItem.contractExecutedCount || 0) == 0" class="">0</span>
                                  <a ng-show="(dataItem.contractExecutedCount || 0) > 0" ng-click="showContracts(dataItem, [6])" class="ng-binding ng-hide"></a>
                              </div>

                              <div class="pb-5 pb-lg-3 text-nowrap">
                                  <b>Расторгнутых контрактов:</b>
                                  <span ng-show="(dataItem.contractTerminatedCount || 0) == 0" class="">0</span>
                                  <a ng-show="(dataItem.contractTerminatedCount || 0) > 0" ng-click="showContracts(dataItem, [7])" class="ng-binding ng-hide"></a>
                              </div>
                              <div class="pb-5 pb-lg-3 text-nowrap">
                                  <a ng-click="showContracts(dataItem, [5])">Активные обязательства</a>
                              </div>
                              <!-- ngIf: showLinkSetTrusted || isOfferAuction -->

                              <!-- ngIf: canAllUsers || canOwnUsers && dataItem.id == currentSupplierId -->

                              <!-- ngIf: dataItem.hasTrustedAreas -->

                              <!-- ngIf: showLinkSetTrusted -->

                              <!-- ngIf: canBlockSupplier -->
                              <div>
                                  <i class="fa fa-id-card mr-3 img" ng-show="showRegister(dataItem)" title="Я зарегистрирован на Портале Поставщиков"></i>
                                  <img class="mr-3" src="assets\icon\patent.svg" height="30" ng-show="dataItem.companyIsSmallBusiness == true" title="Субъект малого предпринимательства">
                              </div>
                              <div class="custom-control t-3  custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label"  for="customCheck1">Отправить на сравнение</label>
                              </div>
                          </div>
                      </div>
                  </div>
              </div><div class="panel panel-default cssp-panelcard ng-scope" data-uid="88780ab2-7a4e-40d8-8efd-0ba848997cb2" role="option" aria-selected="false">
                  <div class="panel-body">
                      <div class="row">
                          <div class="col-12 col-lg-8">
                              <div class="pb-5">
                                  <h2 class="cssp-panelcard_heading">
                                      <a ui-sref="common.suppliers.emptyfilter.detail.view({id:dataItem.id})" class="ng-binding" href="#/suppliers/26623685">ООО "АВТОГРАД ГАРАНТ"</a>
                                  </h2>
                              </div>

                              <div class="pb-5 ng-binding">
                                  <p class="mb-3"><b>Тип поставщика</b></p>
                                  Юридическое лицо
                              </div>

                              <div class="row pb-5">
                                  <div class="col-12 col-sm-4 ng-binding">
                                      <p class="mb-3"><b>ИНН</b></p>
                                      7203237142
                                  </div>
                                  <div class="col-12 col-sm-4 pt-5 pt-sm-0 ng-binding" ng-show="dataItem.companyTypeId == enum.companyType.ul">
                                      <p class="mb-3"><b>КПП</b></p>
                                      720301001
                                  </div>
                                  <div class="col-12 col-sm-4 pt-5 pt-sm-0 ng-binding" ng-show="dataItem.companyTypeId == enum.companyType.ip || dataItem.companyTypeId == enum.companyType.ul">
                                      <p class="mb-3"><b class="ng-binding">ОГРН</b></p>
                                      1097232020819
                                  </div>
                              </div>
                          </div>

                          <div class="col-12 col-lg-4">
                              <div class="pb-5 pb-lg-3">
                                  <b>Статус:</b>
                                  <!-- ngIf: !dataItem.companyIsBlocked --><span ng-if="!dataItem.companyIsBlocked" class="ng-binding ng-scope"> Зарегистрирован</span><!-- end ngIf: !dataItem.companyIsBlocked -->
                                  <!-- ngIf: dataItem.companyIsBlocked -->
                              </div>

                              <!-- ngIf: dataItem.isPromCooperationCompany -->

                              <!--<cssp-rating rating="dataItem.rating"></cssp-rating>-->

                              <div class="pb-5 pb-lg-3 text-nowrap">
                                  <b>Исполненных контрактов:</b>
                                  <span ng-show="(dataItem.contractExecutedCount || 0) == 0" class="">0</span>
                                  <a ng-show="(dataItem.contractExecutedCount || 0) > 0" ng-click="showContracts(dataItem, [6])" class="ng-binding ng-hide"></a>
                              </div>

                              <div class="pb-5 pb-lg-3 text-nowrap">
                                  <b>Расторгнутых контрактов:</b>
                                  <span ng-show="(dataItem.contractTerminatedCount || 0) == 0" class="">0</span>
                                  <a ng-show="(dataItem.contractTerminatedCount || 0) > 0" ng-click="showContracts(dataItem, [7])" class="ng-binding ng-hide"></a>
                              </div>
                              <div class="pb-5 pb-lg-3 text-nowrap">
                                  <a ng-click="showContracts(dataItem, [5])">Активные обязательства</a>
                              </div>

                              <div>
                                  <i class="fa fa-id-card mr-3 img" ng-show="showRegister(dataItem)" title="Я зарегистрирован на Портале Поставщиков"></i>
                                  <img class="mr-3" src="assets\icon\patent.svg" height="30" ng-show="dataItem.companyIsSmallBusiness == true" title="Субъект малого предпринимательства">
                              </div>
                              <div class="custom-control t-3  custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label"  for="customCheck1">Отправить на сравнение</label>
                              </div>
                          </div>
                      </div>
                  </div>
              </div></div>

              <div id="cssp_filters" class="cssp_filters bg-white d-none d-xl-block col-xl-3 p-0" ng-class="{'filter-opened' : showFilter}">
                <!-- <div id="bannerRight" class="cssp_banners d-none d-xl-block cssp_banners d-none d-xl-block {{ class }} {{ class }} cssp_banners d-none d-xl-block {{ class }} {{ class }}" position="bannerRight">
                <a ng-hide="!banners || banners.length < 2" ng-click="nextBanner()" class="b_ra_bannerRight">
                </a> <a ng-hide="!banners || banners.length < 2" ng-click="prevBanner()" class="b_la_bannerRight"></a>
                <a id="bannerRight_img" href="https://old-zakupki.mos.ru/#/controlservice" target="_blank" class="_bnr_bannerRight"><
                  img alt="Обратная связь" src="api/Core/Thumbnail/131391568/398/398"></a>
                </div><!-- uiView: filter -->
                <div ui-view="filter" class="ng-scope">
                  <form ng-submit="applyFilter()" class="ng-scope ng-valid ng-pristine">

 <label class="pb-1 font-weight-bold">Сортировка</label>
                   <div class="panel-body pt-0 px-6 pb-6">
                     <div class="row pb-4">
                       <div class="col-12">
                         <label class="pb-1 font-weight-bold">Наименование</label>
                         <input type="text" class="form-control ng-pristine ng-valid" ng-model="filter.nameLike">
                       </div>
                     </div>
                     <div class="row pb-4">
                       <div class="col-12">
                         <label class="pb-1 font-weight-bold">
                           ИНН</label>
                           <input type="text" class="form-control ng-pristine ng-valid" ng-model="filter.innLike">
                         </div>
                       </div>
                       <div class="row pb-4">
                         <div class="col-12">
                           <label class="pb-1 font-weight-bold">ОГРН</label>
                            <input type="text" class="form-control ng-pristine ng-valid" ng-model="filter.ogrnLike">
                          </div>
                        </div>
                        <div class="row pb-4">
                          <div class="col-12">
                            <label class="pb-1 font-weight-bold">КПП</label>
                            <input type="text" class="form-control ng-pristine ng-valid" ng-model="filter.kppLike">
                          </div>
                        </div>

                       <div class="row">
                         <div class="col-12">
                           <label class="pb-1 font-weight-bold">Дата регистрации
                           </label>
                           <core-date-range range-controls-separator="&nbsp;-&nbsp;" range-start-value="filter.extensionCreateDateGreatEqual" range-end-value="filter.extensionCreateDateLessEqual">
                             <table ng-controller="CoreDateRangeController" class="ng-scope">
                               <tbody>
                                 <tr>
                                   <td>
                                     <span class="k-widget k-datepicker k-header dateRangeStart valTool" data="" style="width: auto; min-height: 25px;">
                                       <span class="k-picker-wrap k-state-default">
                                         <input class="dateRangeStart valTool k-input" data="{{start}}" style="width: 100%; min-height: 25px;" data-role="datepicker" type="text" role="combobox" aria-expanded="false" aria-disabled="false" aria-readonly="false">
                                         <span unselectable="on" class="k-select" role="button">
                                           <span unselectable="on" class="k-icon k-i-calendar">
                                           </span>
                                         </span>
                                       </span>
                                     </span>
                                   </td>
                                   <td ng-bind-html="separator" class="ng-binding">&nbsp;-&nbsp;
                                   </td>
                                   <td>
                                     <span class="k-widget k-datepicker k-header dateRangeEnd valTool" data="" style="width: auto; min-height: 25px;">
                                       <span class="k-picker-wrap k-state-default">
                                         <input class="dateRangeEnd valTool k-input" data="{{end}}" style="width: 100%; min-height: 25px;" data-role="datepicker" type="text" role="combobox" aria-expanded="false" aria-disabled="false" aria-readonly="false"><span unselectable="on" class="k-select" role="button"><span unselectable="on" class="k-icon k-i-calendar">select</span></span></span></span></td></tr></tbody></table></core-date-range></div></div></div><div class="panel-body pt-0 px-6 pb-6">
                                           <div class="row pb-4"><div class="col-12 mb-2">
                                           <input type="radio" ng-model="filter.companyIsBlocked" class="radiostyle ng-pristine ng-valid" value="null" id="filterAll" name="00E"><label for="filterAll">Все</label></div><div class="col-12 mb-2"><input type="radio" ng-model="filter.companyIsBlocked" class="radiostyle ng-pristine ng-valid" value="false" id="filterNonLocked" name="00F"><label for="filterNonLocked">Только незаблокированные</label></div><div class="col-12 mb-2"><input type="radio" ng-model="filter.companyIsBlocked" class="radiostyle ng-pristine ng-valid" value="true" id="filterLocked" name="00G">
                                             <label for="filterLocked">Только заблокированные</label>
                                           </div>
                                         </div><!-- ngIf: canAllUsers -->
                                         <div class="row">
                                           <div class="col-12">
                                             <div class="panel panel-default">
                                               <div class="panel-heading px-0 pt-5 pb-5 font-weight-bold">Организационные признаки</div>
                                               <div class="panel-body p-0">
                                                 <div class="row">
                                                   <div class="col-12 pb-3">
                                                     <input type="checkbox" ng-model="filter.isSmallBusiness" class="checkstyle ng-pristine ng-valid" id="smp" ng-false-value="" ng-true-value="true">

                                                      <label for="smp">СМП</label>
                                                    </div>
                                                    <div class="col-12 pb-3">
                                                      <input type="checkbox" class="checkstyle ng-pristine ng-valid" id="uis" ng-model="filter.companyIsCorrectionalSystem" ng-false-value="" ng-true-value="true">
                                                      <label for="uis">УИС
                                                      </label>
                                                    </div>
                                                    <div class="col-12 pb-3">
                                                      <input type="checkbox" class="checkstyle ng-pristine ng-valid" id="inv" ng-model="filter.companyIsDisabledPeopleOrg" ng-false-value="" ng-true-value="true">
                                                       <label for="inv">Организации инвалидов
                                                       </label>
                                                     </div>
                                                     <div class="col-12">
                                                       <input type="checkbox" class="checkstyle ng-pristine ng-valid" id="soc" ng-model="filter.companyIsSocialVenture" ng-false-value="" ng-true-value="true"> <label for="soc">Социально-ориентированные</label></div></div></div></div></div></div><div class="panel panel-default"><div class="panel-heading px-0 pt-5 pb-5 font-weight-bold">Статусы поставщика</div>
                                                       <div class="panel-body p-0">
                                                         <div class="row pb-5">
                                                           <div class="col-12 pb-3">
                                                             <input type="checkbox" class="checkstyle ng-pristine ng-valid" id="lpp" ng-model="selectedAchievements[enum.achievementType.lpp]"> <label for="lpp">Лидер Портала поставщиков</label></div><div class="col-12 pb-3"><input type="checkbox" class="checkstyle ng-pristine ng-valid" id="od" ng-model="selectedAchievements[enum.achievementType.od]">
                                                               <label for="od">Официальный дилер
                                                               </label>
                                                             </div>
                                                             <div class="col-12">
                                                               <input type="checkbox" class="checkstyle ng-pristine ng-valid" id="pip" ng-model="selectedAchievements[enum.achievementType.pip]">
                                                               <label for="pip">Поставщик инновационной продукции
                                                               </label>
                                                             </div>
                                                           </div>
                                                           <div class="row">
                                                             <div class="col-12">
                                                               <label class="pb-1 font-weight-bold">Год
                                                               </label>
                                                             </div>
                                                             <div class="col-12">
                                                               <span class="k-widget k-dropdown k-header ng-pristine ng-valid" unselectable="on" role="listbox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-owns="" aria-disabled="false" aria-readonly="false" aria-busy="false" style="width: 130px;"><span unselectable="on" class="k-dropdown-wrap k-state-default">
                                                                 <span unselectable="on" class="k-input ng-scope">
                                                                 </span>
                                                                 <span unselectable="on" class="k-select">
                                                                   <span unselectable="on" class="k-icon k-i-arrow-s">select
                                                                   </span>
                                                                 </span>
                                                               </span>
                                                               <select style="width: 130px; display: none;" kendo-drop-down-list="" ng-model="filter.achievementsYear" k-data-source="optionYears" class="ng-pristine ng-valid" data-role="dropdownlist"><option value="" selected="selected"></option><option value="2013">2013</option><option value="2014">2014</option>
                                                                 <option value="2015">2015
                                                                 </option>
                                                                 <option value="2016">2016
                                                                 </option><option value="2017">2017
                                                                 </option>
                                                                 <option value="2018">2018
                                                                 </option>
                                                                 <option value="2019">2019
                                                                 </option>
                                                                 <option value="2020">2020
                                                                 </option></select>
                                                               </span>
                                                             </div>
                                                           </div>
                                                         </div>
                                                       </div>
                                                       <div class="panel panel-default">
                                                         <div class="panel-heading px-0 pt-3">
                                                         </div>
                                                         <div class="panel-body p-0">
                                                           <div class="row">
                                                             <div class="col-12 pb-3">
                                                               <input type="checkbox" class="checkstyle ng-pristine ng-valid" id="over" ng-model="filter.isOverpriced" ng-false-value="" ng-true-value="true"> <label for="over">Цена в офертах завышена</label></div><div class="col-12 pb-3"><input type="checkbox" class="checkstyle ng-pristine ng-valid" id="reg" ng-model="filter.registred" ng-false-value="" ng-true-value="true">
                                                                 <label for="reg">Зарегистрированный на Портале поставщиков
                                                                 </label>
                                                               </div>
                                                               <div class="col-12">
                                                                 <input type="checkbox" ng-model="filter.isPromCooperationCompany" ng-true-value="true" ng-false-value="" class="checkstyle ng-pristine ng-valid" id="filterIsPromCooperationCompany"> <label for="filterIsPromCooperationCompany">Производитель продукции</label></div></div></div></div><div class="row pt-5 bt-1">
                                                                   <div class="col-12 text-center">
                                                                     <button type="submit" class="btn btn-primary text-uppercase" cssp-filter-button="">Найти</button>
                                                                     <button ng-click="clearFilter()" class="btn btn-link">Очистить
                                                                     </button>
                                                                   </div>
                                                                   <div class="col-12 text-center mt-4 ng-hide" ng-show="canSplash &amp;&amp; !isOfferAuction">
                                                                     <button class="btn btn-link" ng-click="massMessage()">Массовые сообщения
                                                                     </button>
                                                                   </div>
                                                                   <div class="col-12 text-center mt-4 ng-hide" ng-show="isOfferAuction">
                                                                     <button class="btn btn-link" ng-click="auctionMessage()">Направить приглашение
                                                                     </button>
                                                                   </div>
                                                                 </div>
                                                               </div>
                                                             </div>
                                                           </form>
                                                         </div><!--<div class="my-4 px-5 d-none d-xl-block">
                <a class="btn btn-green d-block mb-3" href="Content/files/Инструкция.pdf" download><i class="fa fa-file-pdf-o text-white pr-4" aria-hidden="true"></i><span>Инструкции по работе с&nbsp;Порталом</span></a>
                <a class="btn btn-green d-block" ui-sref="common.instructions.emptyfilter.video" target="_blank"><i class="fa fa-youtube-play text-white pr-4" style="padding: 0.45rem 0;" aria-hidden="true"></i><span>Видео-Инструкция</span></a>
            </div>--><!-- ngIf: showCustomerHelpButton || showRegAdminHelpButton || showSupplierHelpButton --></div>

  <?php //include('block\poll.html');?>

  <?php include('block\footer.html');?>

    </section>
    <!-- -------------- /Main Wrapper -------------- -->

<?php include('block\jquery.html');?>
</div>
<!-- -------------- /Body Wrap  -------------- -->


</body>

</html>
