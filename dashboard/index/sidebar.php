<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="" class="brand-link">
    <img src="../../dist/img/car.jpeg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light">Fleet</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="../../dist/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Md. Imran Hossain</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item has-treeview menu-open">
          <a href="<?php echo $_SESSION['base_url'] . 'dashboard/index/index.php'; ?>" class="nav-link">
            <i style="color: springgreen" class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>

        </li>


        <!--//////////////////////////////////////////////////////////////// Land Module-->

        <!-- fleet module -->


        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">

            <i class="fa fa-car" style="font-size: 22px;margin:0px 7px 0px 3px;color: springgreen" aria-hidden="true"></i>

            <p>
              Vehicle
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>

          <ul class="nav nav-treeview">
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="fas fa-cogs" style="font-size: 22px; margin:0px 1px 0px 2px;"></i>
                <p>
                  Vehicle Setup
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../../fleet_module/vehicle_setup_type/index.php" class="nav-link">
                    <i class="fa fa-cog" style="font-size: 22px; margin:0px 7px 0px 3px;" aria-hidden="true"></i>
                    <p>Vehicle Type</p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../../fleet_module/vehicle_setup_make/index.php" class="nav-link">
                    <i class="fa fa-cog" style="font-size: 22px; margin:0px 7px 0px 3px;" aria-hidden="true"></i>
                    <p>Vehicle Make</p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../../fleet_module/vehicle_setup_model/index.php" class="nav-link">
                    <i class="fa fa-cog" style="font-size: 22px; margin:0px 7px 0px 3px;" aria-hidden="true"></i>
                    <p>Vehicle Model</p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../../fleet_module/vehicle_setup_status/index.php" class="nav-link">
                    <i class="fa fa-cog" style="font-size: 22px; margin:0px 7px 0px 3px;" aria-hidden="true"></i>
                    <p>Vehicle Status</p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../../fleet_module/vehicle_setup_group/index.php" class="nav-link">
                    <i class="fa fa-cog" style="font-size: 22px; margin:0px 7px 0px 3px;" aria-hidden="true"></i>
                    <p>Vehicle Group</p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../../fleet_module/vehicle_setup_ownership/index.php" class="nav-link">
                    <i class="fa fa-cog" style="font-size: 22px; margin:0px 7px 0px 3px;" aria-hidden="true"></i>
                    <p>Vehicle Ownership</p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../../fleet_module/vehicle_setup_body_type/index.php" class="nav-link">
                    <i class="fa fa-cog" style="font-size: 22px; margin:0px 7px 0px 3px;" aria-hidden="true"></i>
                    <p>Vehicle Body Type</p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../../fleet_module/vehicle_setup_body_subtype/index.php" class="nav-link">
                    <i class="fa fa-cog" style="font-size: 22px; margin:0px 7px 0px 3px;" aria-hidden="true"></i>
                    <p>Vehicle Body Subtype</p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../../fleet_module/vehicle_setup_drive_type/index.php" class="nav-link">
                    <i class="fa fa-cog" style="font-size: 22px; margin:0px 7px 0px 3px;" aria-hidden="true"></i>
                    <p>Vehicle Drive Type</p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../../fleet_module/vehicle_setup_brake_system/index.php" class="nav-link">
                    <i class="fa fa-cog" style="font-size: 22px; margin:0px 7px 0px 3px;" aria-hidden="true"></i>
                    <p>Vehicle Brake System</p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../../fleet_module/vehicle_setup_fuel_type/index.php" class="nav-link">
                    <i class="fa fa-cog" style="font-size: 22px; margin:0px 7px 0px 3px;" aria-hidden="true"></i>
                    <p>Vehicle Fuel Type</p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../../fleet_module/vehicle_setup_expense_type/index.php" class="nav-link">
                    <i class="fa fa-cog" style="font-size: 22px; margin:0px 7px 0px 3px;" aria-hidden="true"></i>
                    <p>Vehicle Expense Type</p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../../fleet_module/vehicle_setup_frequency/index.php" class="nav-link">
                    <i class="fa fa-cog" style="font-size: 22px; margin:0px 7px 0px 3px;" aria-hidden="true"></i>
                    <p>Vehicle Frequency</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <a href="../../fleet_module/vehicle_management/index.php" class="nav-link">
                <i class="far fa-dot-circle nav-icon"></i>
                <p>Vehicle List</p>
              </a>
            </li>
          </ul>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="../../fleet_module/vehicle_assignments/index.php" class="nav-link">
                <i class="far fa-dot-circle nav-icon"></i>
                <p>Vehicle Assignments</p>
              </a>
            </li>
          </ul>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="../../fleet_module/expense_history/index.php" class="nav-link">
                <i class="far fa-dot-circle nav-icon"></i>
                <p>Expense History</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">

          <a href="#" class="nav-link">
            <i class="fa fa-check-circle" style="font-size: 22px;margin:0px 7px 0px 3px;color: springgreen" aria-hidden="true"></i>
            <p>
              Inspections
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="fas fa-cogs" style="font-size: 22px; margin:0px 1px 0px 2px;"></i>
                <p>
                  Inspections Setup
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../../fleet_module/vehicle_setup_fuel_level/index.php" class="nav-link">
                    <i class="fa fa-cog" style="font-size: 22px; margin:0px 7px 0px 3px;" aria-hidden="true"></i>
                    <p>Fuel Level</p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../../fleet_module/vehicle_setup_vehicle_condition_ok/index.php" class="nav-link">
                    <i class="fa fa-cog" style="font-size: 22px; margin:0px 7px 0px 3px;" aria-hidden="true"></i>
                    <p>Vehicle Condition Ok</p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../../fleet_module/vehicle_setup_items_template/index.php" class="nav-link">
                    <i class="fa fa-cog" style="font-size: 22px; margin:0px 7px 0px 3px;" aria-hidden="true"></i>
                    <p>Items Template</p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../../fleet_module/vehicle_setup_color/index.php" class="nav-link">
                    <i class="fa fa-cog" style="font-size: 22px; margin:0px 7px 0px 3px;" aria-hidden="true"></i>
                    <p>Color</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="../../fleet_module/inspection_history/index.php" class="nav-link">
                <i class="far fa-dot-circle nav-icon"></i>
                <p>Inspection History</p>
              </a>
            </li>
          </ul>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="../../fleet_module/inspection_forms/index.php" class="nav-link">
                <i class="far fa-dot-circle nav-icon"></i>
                <p>Forms</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="fa fa-user" style="font-size: 22px; margin:0px 7px 0px 3px;color: springgreen" aria-hidden="true"></i>
            <p>
              Contacts & Users
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">

            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="fas fa-cogs" style="font-size: 22px; margin:0px 1px 0px 2px;"></i>
                <p>
                  Contacts & Users Setup
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../../fleet_module/contacts_users_setup_user_type/index.php" class="nav-link">
                    <i class="fa fa-cog" style="font-size: 22px; margin:0px 7px 0px 3px;" aria-hidden="true"></i>
                    <p>Contacts User Type</p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../../fleet_module/vendors_country/index.php" class="nav-link">
                    <i class="fa fa-cog" style="font-size: 22px; margin:0px 7px 0px 3px;" aria-hidden="true"></i>
                    <p>User's Country</p>
                  </a>
                </li>
              </ul>

            </li>
            <li class="nav-item">
              <a href="../../fleet_module/user_management/index.php" class="nav-link">
                <i class="far fa-dot-circle nav-icon"></i>
                <p>Contact List</p>
              </a>
            </li>
          </ul>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="../../fleet_module/user_management/index.php" class="nav-link">
                <i class="far fa-dot-circle nav-icon"></i>
                <p>User Management</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="fa fa-store" style="font-size: 21px; margin:0px 5px 0px 3px;color: springgreen" aria-hidden="true"></i>
            <p>
              Vendors
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="fas fa-cogs" style="font-size: 22px; margin:0px 1px 0px 2px;"></i>
                <p>
                  Vendors Setup
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../../fleet_module/vendors_setup_label/index.php" class="nav-link">
                    <i class="fa fa-cog" style="font-size: 22px; margin:0px 7px 0px 3px;" aria-hidden="true"></i>
                    <p>Vendors Label</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="../../fleet_module/vendors/index.php" class="nav-link">
                <i class="far fa-dot-circle nav-icon"></i>
                <p>
                  Vendors
                </p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="fa fa-gas-pump" style="font-size: 22px; margin:0px 7px 0px 3px;color: springgreen" aria-hidden="true"></i>
            <p>
              Fuel
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="fas fa-cogs" style="font-size: 22px; margin:0px 1px 0px 2px;"></i>
                <p>
                  Fuel Setup
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../../fleet_module/vehicle_setup_fuel_type/index.php" class="nav-link">
                    <i class="fa fa-cog" style="font-size: 22px; margin:0px 7px 0px 3px;" aria-hidden="true"></i>
                    <p>Fuel Type</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="../../fleet_module/fuel/index.php" class="nav-link">
                <i class="far fa-dot-circle nav-icon"></i>
                <p>
                  Fuel
                </p>
              </a>
            </li>
          </ul>
        </li>
      </ul>

    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
