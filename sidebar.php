<!-- Sidebar -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<div class="sidebar" id="mySidebar">
<div class="side-header">
    <img src="./assets/images/logo.png" width="120" height="120" alt="Admin"> 
    <h5 style="margin-top:10px;">Hello, Admin</h5>
</div>

<hr style="border:1px solid; background-color:#8a7b6d; border-color:#3B3131;">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <a href="./home.php" ><i ></i> Dashboard</a>
    <a href="#department"   onclick="showDepartment()" ><i ></i> Department</a>
    <a href="#assets"   onclick="showAssets()" ><i ></i>ICT Assets</a>
    <a href="#users"  onclick="showUsers()" ><i ></i> Users</a>
    <div class="dropdown">
    <a class="dropdown-toggle" href="#"  data-bs-toggle="dropdown">Transactions</a>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#issue"   onclick="issueForm()">Issue Asset</a></li>
        <li><a class="dropdown-item" href="#recall" onclick="recallForm()">Recall Asset</a></li>
        <li><a class="dropdown-item" href="#dispose" onclick="showDispose()">Dispose Asset</a></li>
        <li><a class="dropdown-item" href="#dispose" onclick="userForm()">Add User</a></li>
        <li><a class="dropdown-item" href="#dispose" onclick="assetForm()">Add Asset</a></li>
        <li><a class="dropdown-item" href="#dispose" onclick="departmentForm()">Add Department</a></li>
        <li><a class="dropdown-item" href="#dispose" onclick="sectionForm()">Add Section</a></li>
      </ul>
    </div>
    <a href="#issued"   onclick="showAssetReg()" ><i ></i>Issued Assets</a>
    <a href="#recalled" onclick="showStorage()"><i ></i>Recalled Assets</a>
    <!--<a href="#reports" onclick="showReports()"><i ></i> Reports</a>-->

    <div class="dropdown">
    <a class="dropdown-toggle" href="#"  data-bs-toggle="dropdown">Reports</a>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#" onclick="userReport()">All Users</a></li>
        <li><a class="dropdown-item" href="#" onclick="assetReport()">All Assets</a></li>
        <li><a class="dropdown-item" href="#" onclick="storeAssetReport()">Assets in Store</a></li>
        <li><a class="dropdown-item" href="#" onclick="issuedAssetsReport()">Issued Assets</a></li>
        <li><a class="dropdown-item" href="#" onclick="disposedReport()">Disposed Assets</a></li>
        <li><a class="dropdown-item" href="#" onclick="issuanceReport()">Issuance Register</a></li>
        <li><a class="dropdown-item" href="#" onclick="assetTrace()">Trace Asset</a></li>
      </ul>
    </div>
    
  
  <!---->
</div>
</div>
 
<div id="main">
    <button class="openbtn" onclick="openNav()"><i class="fa fa-home"></i></button>
</div>



