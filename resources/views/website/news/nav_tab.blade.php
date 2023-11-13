

    <!-- Responsive Tabs with Line Title Start -->
    <ul class="nav nav-tabs nav-tabs-title nav-tabs-line-title responsive-tabs" id="lineTitleTabsContainer" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" data-bs-toggle="tab" href="#firstLineTitleTab" role="tab" aria-selected="true">News Tab</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" data-bs-toggle="tab" href="#secondLineTitleTab" role="tab" aria-selected="false">Media Tab</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" data-bs-toggle="tab" href="#thirdLineTitleTab" role="tab" aria-selected="false">Career Tab</a>
        </li>
        <!-- An empty list to put overflowed links -->
        <li class="nav-item dropdown ms-auto pe-0 d-none responsive-tab-dropdown">
            <a
                    class="btn btn-icon btn-icon-only btn-background pt-0 bg-transparent pe-0"
                    href="#"
                    data-bs-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
            >
                <i data-acorn-icon="more-horizontal"></i>
            </a>
            <ul class="dropdown-menu mt-2 dropdown-menu-end"></ul>
        </li>
    </ul>

    <div class="card mb-5">
        <div class="card-body">
            <div class="tab-content">
                <div class="tab-pane fade active show" id="firstLineTitleTab" role="tabpanel">
                    <h5 class="card-title">First Line Title</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                </div>
                <div class="tab-pane fade" id="secondLineTitleTab" role="tabpanel">
                    <h5 class="card-title">Second Line Title</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                </div>
                <div class="tab-pane fade" id="thirdLineTitleTab" role="tabpanel">
                    <h5 class="card-title">Third Line Title</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                </div>
            </div>
        </div>
    </div>
