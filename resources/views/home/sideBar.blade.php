<div class="container-fluid" style="padding-left: 0; padding-right: 0;">
    <!-- Navigation Sidebar -->
    <nav class="col-md-3 col-lg-2 d-md-block  sidebar" style="position: fixed;">
        <ul class="nav flex-column nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" data-role="tab" id="maintain-tab" data-toggle="pill" href="#maintainOrphanDetails">Maintain Orphan Details</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-role="tab" id="gallery-tab" data-toggle="pill" href="#orphanGallery">Orphan Gallery</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-role="tab" id="request-tab" data-toggle="pill" href="#userRequest">User Request</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-role="tab" id="ngo-tab" data-toggle="pill" href="#otherNgoRequest">Other Ngo Request</a>
            </li>
        </ul>
    </nav>

    <!-- Content -->
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4 mt-5 " style="padding-top: 100px;" >
        <div class="tab-pane " id="maintainOrphanDetails">
            <h2>Orphan Details</h2>    
        <!-- Content specific to Maintain Orphan Details -->
        </div>
        <div class="tab-pane d-none " id="orphanGallery">
            @include('home.ngoGallerySection')
            <!-- Content specific to Orphan Gallery -->
        </div>
        <div class="tab-pane d-none" id="userRequest">
            <h2>User Request</h2>
            <!-- Content specific to User Request -->
        </div>
        <div class="tab-pane d-none" id="otherNgoRequest">
            <h2>Other Ngo Request</h2>
            <!-- Content specific to Other Ngo Request -->
        </div>
    </main>
</div>