@php
    $html_tag_data = [];
    $title = 'Product List';
    $description= 'Ecommerce Product List Page'
@endphp
@extends('admin-view.layout',['html_tag_data'=>$html_tag_data, 'title'=>$title, 'description'=>$description])

@section('css')
<link rel="stylesheet" href="/css/vendor/quill.bubble.css"/>
    <link rel="stylesheet" href="/css/vendor/select2.min.css"/>
    <link rel="stylesheet" href="/css/vendor/select2-bootstrap4.min.css"/>
    <link rel="stylesheet" href="/css/vendor/tagify.css"/>
    <link rel="stylesheet" href="/css/vendor/dropzone.min.css"/>
@endsection

@section('js_vendor')
    <script src="/js/vendor/imask.js"></script>
    <script src="/js/vendor/quill.min.js"></script>
    <script src="/js/vendor/quill.active.js"></script>
    <script src="/js/vendor/select2.full.min.js"></script>
    <script src="/js/vendor/tagify.min.js"></script>
    <script src="/js/vendor/dropzone.min.js"></script>
@endsection

@section('js_page')
    <script src="/js/cs/checkall.js"></script>
    <script src="/js/pages/products.list.js"></script>
    <script src="/js/cs/dropzone.templates.js"></script>
    <script src="/js/pages/products.detail.js"></script>
@endsection
@section('content')
<style>
.upload-png {
    background-color: antiquewhite;

}
* {
    /* -webkit-user-select: none; */
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
.labelkh{
    font-size: 16px !important;
    font-weight: 550 !important;
    font-family: 'Nokora', sans-serif !important;
}
</style>

    <div class="container">
        <!-- Title and Top Buttons Start -->
        <div class="page-title-container">
            <div class="row g-0">
                <!-- Title Start -->
                <div class="col-auto mb-3 mb-md-0 me-auto">
                    <div class="w-auto sw-md-30">
                        <a href="#" class="muted-link pb-1 d-inline-block breadcrumb-back">
                            <i data-acorn-icon="chevron-left" data-acorn-size="13"></i>
                            <span class="text-small align-middle">Home</span>
                        </a>
                        <h1 class="mb-0 pb-0 display-4" id="title">{{ $title }}</h1>
                    </div>
                </div>
                <!-- Title End -->

                <!-- Top Buttons Start -->
                <div class="w-100 d-md-none"></div>
                <div class="col-12 col-sm-6 col-md-auto d-flex align-items-end justify-content-end mb-2 mb-sm-0 order-sm-3">
                    <!-- Default Start -->
                    <section class="scroll-section" id="default">
                        <!-- Button Trigger -->
                        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Product</button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelDefault" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabelDefault">Add Product</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="card-body">
                                            <form action="/Admin/Products/List/add-product" method="POST" enctype="multipart/form-data" id="product-form">
                                                @csrf
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" placeholder="Name" name="name" autocomplete="off"/>
                                                    <label>Product Name</label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" placeholder="Code" name="code"  autocomplete="off"/>
                                                    <label>Code</label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" placeholder="Type" name="type"  autocomplete="off"/>
                                                    <label>Type</label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input class="form-control" placeholder="Price" name="price" autocomplete="off"/>
                                                    <label>Price</label>
                                                </div>
                                                <div class="form-floating mb-3" hidden>
                                                    <input type="text" class="form-control" placeholder="pdvalue" name="pdvalue" value="1"/>
                                                    <label>Value</label>
                                                </div>
                                                <!-- Image Start -->
                                                <div class="mb-5">
                                                    <div class="input-group mb-3">
                                                        <input type="file" class="form-control" name="image" id="input-file1" onchange="loadFile1(event)">
                                                        <label class="input-group-text">Upload</label>
                                                    </div>
                                                </div>
                                                {{-- <div class="mb-5" >
                                                    <img src="" id="output1" class="w-100 h-100 rounded-md bg-cover-center d-block upload-png" onerror="this.src='/img/upload.png'">
                                                </div> --}}
                                                <!-- Image End -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                   <!-- Default End -->
                    {{-- <div class="dropdown d-inline-block d-lg-none">
                        <button type="button" class="btn btn-outline-primary btn-icon btn-icon-only ms-1" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                aria-haspopup="true" aria-expanded="false">
                            <i data-acorn-icon="sort"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end custom-sort">
                            <a class="dropdown-item sort" data-sort="name" href="#">Title</a>
                            <a class="dropdown-item sort" data-sort="email" href="#">Stock</a>
                            <a class="dropdown-item sort" data-sort="phone" href="#">Price</a>
                            <a class="dropdown-item sort" data-sort="group" href="#">Status</a>
                        </div>
                    </div>
                    <div class="btn-group ms-1 check-all-container-checkbox-click">
                        <div class="btn btn-outline-primary btn-custom-control p-0 ps-3 pe-2" data-target="#checkboxTable">
                            <span class="form-check float-end">
                                <input type="checkbox" class="form-check-input" id="checkAll" />
                            </span>
                        </div>
                        <button type="button" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split" data-bs-offset="0,3" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"></button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <button class="dropdown-item" id="deleteChecked" type="button">Delete</button>
                        </div>
                    </div> --}}
                </div>
                <!-- Top Buttons End -->
            </div>
        </div>
        <!-- Title and Top Buttons End -->



        <!-- Controls Start -->
        <div class="row mb-2">
            <!-- Search Start -->
            <div class="col-sm-12 col-md-5 col-lg-3 col-xxl-2 mb-1">
                <div class="d-inline-block float-md-start me-1 mb-1 search-input-container w-100 shadow bg-foreground">
                    <input class="form-control" placeholder="Search" onkeyup="search_pic()" id="searchbar" name="search"/>
                    <span class="search-magnifier-icon">
                        <i data-acorn-icon="search"></i>
                    </span>
                    <span class="search-delete-icon d-none">
                        <i data-acorn-icon="close"></i>
                    </span>
                </div>
            </div>
            <!-- Search End -->
        </div>
        <div id="checkboxTable">
            <div class="mb-4 mb-lg-3 bg-transparent no-shadow d-none d-lg-block">
              <div class="row g-0">
                <div class="col-auto sw-11 d-none d-lg-flex"></div>
                <div class="col">
                  <div class="ps-5 pe-4 h-100">
                    <div class="row g-0 h-100 align-content-center custom-sort">
                      <div class="col-lg-3 d-flex flex-column mb-lg-0 pe-3 d-flex">
                        <div class="text-muted text-small cursor-pointer sort" data-sort="name">TITLE</div>
                      </div>
                      <div class="col-lg-2 d-flex flex-column pe-1 justify-content-center">
                        <div class="text-muted text-small cursor-pointer sort" data-sort="email">PRICE</div>
                      </div>
                      <div class="col-lg-3 d-flex flex-column pe-1 justify-content-center">
                        <div class="text-muted text-small cursor-pointer sort" data-sort="phone">TYPE</div>
                      </div>
                      <div class="col-lg-2 d-flex flex-column pe-1 justify-content-center">
                        <div class="text-muted text-small cursor-pointer sort" data-sort="group">STATUS</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

                        @foreach ($product as $data)
                        <div class="card mb-2 search">
                            <div class="row g-0 h-100 position-relative">
                              {{-- <a href="Products.Detail.html" class="col-auto position-relative"> --}}
                                <img src="{{url('public/Image/'.$data->image)}}" alt="product" class="card-img card-img-horizontal sw-11 h-100" onerror="this.src='/img/unvailable.jpg'"  />
                              {{-- </a> --}}
                              <div class="col py-4 py-lg-0">
                                <div class="ps-5 pe-4 h-100">
                                  <div class="row g-0 h-100 align-content-center">
                                    <a class="col-11 labelkh col-lg-3 d-flex flex-column mb-lg-0 mb-3 pe-3 d-flex order-1 h-lg-100 justify-content-center">
                                        {{$data->name}}
                                      {{-- <div class="text-small text-muted text-truncate position">#{{$data->code}}</div> --}}
                                    </a>
                                    <div class="col-12 labelkh col-lg-2 d-flex flex-column pe-1 mb-2 mb-lg-0 justify-content-center order-3">
                                      <div class="lh-1 text-alternate">{{$data->price}}$</div>
                                    </div>
                                    <div class="col-12 labelkh col-lg-3 d-flex flex-column pe-1 mb-2 mb-lg-0 justify-content-center order-4">
                                      <div class="lh-1 text-alternate">{{$data->type}}</div>
                                    </div>
                                    <div class="col-12 labelkh col-lg-1 d-flex flex-column pe-1 mb-2 mb-lg-0 align-items-start justify-content-center order-5">
                                        <a href="edit/product/{{$data->id}}" class="btn btn-primary">EDIT</a>
                                    </div>
                                    <div class="col-1 labelkh d-flex flex-column mb-2 mb-lg-0 align-items-end order-2 order-lg-last justify-content-lg-center">
                                        <a href="delete/product/{{$data->id}}" class="btn btn-warning" style="background-color:red">DELETE</a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                        @endforeach


        <!-- Items Pagination Start -->
        <div class="w-100 d-flex justify-content-center">
            <nav>
                <ul class="pagination">
                    {!!$product->links()!!}
                </ul>
            </nav>
        </div>
        <!-- Items Pagination End -->
    </div>
    <script>
    // JavaScript code
    function search_pic() {
        let input = document.getElementById('searchbar').value
        input = input.toLowerCase();
        let x = document.getElementsByClassName('search');

        for (i = 0; i < x.length; i++) {
            if (!x[i].innerHTML.toLowerCase().includes(input)) {
                x[i].style.display = "none";
            } else {
                x[i].style.display = "block";
            }
        }
    }
    </script>
    <script>
        var loadFile1 = function(event) {
        var output1 = document.getElementById('output1');
            output1.height = 100;
            output1.width = 100;
            output1.src = URL.createObjectURL(event.target.files[0]);
            output1.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
            }
        };
    </script>
    <!-- Script -->
@endsection
