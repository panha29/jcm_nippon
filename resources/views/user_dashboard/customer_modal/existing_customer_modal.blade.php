<style>
    .existing{
        border-radius: 8px;
        background-color: white;
        padding: 6px;
    }
    tr { display: none;
    }
    .visible { display: block
    }
    </style>
    <div class="modal fade" id="existingcustomer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="height: auto">
        <div class="modal-dialog" >
        <div class="modal-content" style="background-color: #e7e7e7">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Fill Information</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="mb-3">
                        <div class="d-inline-block float-md-start me-1 mb-1 search-input-container w-100 shadow bg-foreground">
                            <input class="form-control" placeholder="Search" id="InputDetail" onkeyup='searchTable()'/>
                            <span class="search-magnifier-icon"><i data-acorn-icon="search"></i></span>
                            <span class="search-delete-icon d-none"><i data-acorn-icon="close"></i></span>
                        </div>
                    </div>
                    <br>
                    <br>
                    <table id="customer_detail" class="" style="width:100%; margin-top:10px">

                        <tbody id="detailtbody">

                            @foreach ($detail as $item)

                            <tr class="existing mb-3">
                                <td class="col-1" style="text-align: left">{{$item->customer_name}}</td>
                                <td class="col-1" style="text-align: center">{{$item->customer_phone}}</td>
                                <td class="col-1" style="text-align: center;">
                                    {{-- <a draggable="false" class="btn btn-success" href="Customers/Existing/Customer/{{$item->id}}">
                                        <i data-acorn-icon="edit" data-acorn-size="18"></i>
                                    </a> --}}
                                    <a type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#existing{{$item->id}}">
                                        <i data-acorn-icon="edit" data-acorn-size="18"></i>
                                    </a>
                                </td>
                                <div class="modal fade" id="existing{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Fill The Blank</h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="/User/Customers/add-existing-customer" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text addcs">ឈ្មោះ</span>
                                                    <input type="hidden" class="form-control" name="id" value="{{$item['id']}}">
                                                    <input type="text" class="form-control" name="customer_name" value="{{$item['customer_name']}}" readonly>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text">INVOICE</span>
                                                            <input type="text" class="form-control" name="customer_invoice" {{$item['customer_invoice']}}>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text addcs">បញ្ចុះតំលៃ</span>
                                                            <input type="text" class="form-control" name="customer_discount" {{$item['customer_discount']}}>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text">EMAIL</span>
                                                    <input type="text" class="form-control" name="customer_email" value="{{$item['customer_email']}}" readonly>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text addcs">ភេទ</span>
                                                            <input type="text" class="form-control" name="customer_gender" value="{{$item['customer_gender']}}" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="col">
                                                            <div class="input-group mb-3">
                                                                <span class="input-group-text addcs addcs">ភ្ញៀវពិសេស</span>
                                                                <select class="form-select" name="customer_vip">
                                                                    <option selected value="{{$item['customer_vip']}}">{{$item['customer_vip']}}</option>
                                                                    <option value="VIP">YES</option>
                                                                    <option value="No">NO</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="input-group mb-3">
                                                    <span class="input-group-text addcs">លេខទូរស័ព្ទ</span>
                                                    <input type="text" class="form-control" name="customer_phone" value="{{$item['customer_phone']}}">
                                                </div>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text addcs">អាស័យដ្ធាន</span>
                                                    <input type="text" class="form-control" name="customer_address" value="{{$item['customer_address']}}">
                                                </div>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text addcs">កាលបរិចេ្ឆទ</span>
                                                    <input type="text" class="form-control" name="customer_date"value="<?php echo date('Y/m/d'); ?>">
                                                </div>

                                                <div class="input-group mb-3" hidden>
                                                    <span class="input-group-text addcs">Time</span>
                                                    <input type="text" class="form-control" name="customer_time" value="<?php echo date('h:i'); ?>">
                                                </div>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text addcs">ចំនួនទឹកប្រាក់</span>
                                                    <input type="number" class="form-control" name="customer_total" step='0.01'>
                                                </div>
                                                <div class="input-group mb-3">
                                                    <input type="file" class="form-control" name="customer_image" value="">
                                                </div>
                                                <div style="float:right">
                                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                </div>

                                            </form>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        function searchTable() {
                const input = document.querySelector('#InputDetail');
                const filter = input.value.toUpperCase();
                const tbody = document.querySelector('tbody');
                const tr = tbody.getElementsByTagName("tr");
                for (i = 0; i < tr.length; i++) {
                const item = tr[i];
                const itemContent = item.textContent.toUpperCase();
                if (filter.length && itemContent.includes(filter)) {
                    item.classList.add('visible');
                } else {
                    item.classList.remove('visible');
                }
            }
        }
    </script>
