@extends('admin.layouts.app')
 
@section('content')
<!--begin::API keys-->
<div class="card pt-5 px-5">
    <!--begin::Toolbar wrapper-->
    <div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100">
        <!--begin::Page title-->
        <div class="page-title d-flex flex-column justify-content-center gap-1 me-3">

            <!--begin::Breadcrumb-->
            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0">
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">
                    <a href="../../demo49/dist/index.html"
                        class="text-muted text-hover-primary">Home</a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">Create</li>
                <!--end::Item-->
            </ul>
            <!--end::Breadcrumb-->
        </div>
        <!--end::Page title-->
        <!--begin::Actions-->
        <div class="d-flex align-items-center gap-2 gap-lg-3">
            <a href="/subcategories/create"
                class="btn btn-flex btn-outline btn-color-gray-700 btn-active-color-primary bg-body h-40px fs-7 fw-bold">Create Subcategories</a>
            </div>
            <!--end::Actions-->
    </div>
    <!--end::Toolbar wrapper-->
    <!--begin::Header-->
    <div class="card-header card-header-stretch">
        <!--begin::Title-->
        <div class="card-title">
            <h3>Sub Categories</h3>
        </div>
        <!--end::Title-->
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body p-0">
        <!--begin::Table wrapper-->
        <div class="table-responsive">
            <!--begin::Table-->
            <table class="table align-middle table-row-bordered table-row-solid gy-4 gs-9" id="kt_api_keys_table">
                <!--begin::Thead-->
                <thead class="border-gray-200 fs-5 fw-semibold bg-lighten">
                    <tr>
                        <th class="min-w-150px ps-9">S.no</th>
                        <th class="min-w-250px px-0">Title</th>
                        <th class="min-w-100px">Slug</th>
                        <th class="min-w-150px">Category Id</th>
                        <th class="min-w-100px">Status</th>
                        <th class="w-100px">Action</th>
                        <th class="w-100px"></th>
                    </tr>
                </thead>
                <!--end::Thead-->
                <!--begin::Tbody-->
                <tbody class="fs-6 fw-semibold text-gray-600">
                    @foreach ($subcategories as $subcategory)
                    <tr>
                        <td class="ps-9">{{$i ++}}</td>
                        <td data-bs-target="license" class="ps-0">{{$subcategory->title}}</td>
                        <td data-bs-target="license" class="ps-0">{{$subcategory->slug}}</td>
                        <td data-bs-target="license" class="ps-0">{{$subcategory->category_id}}</td>
                      
                        
                        <td>{{ $subcategory->status == 1 ? "Active" :"Deactive" }}</td>
                        {{-- <span class="badge badge-light-success fs-7 fw-semibold">Active</span> : <span class="badge badge-light-danger fs-7 fw-semibold">Inactive</span> --}}
                            
                        
                       
                        <td class="pe-9">
                            <div class="w-200px position-relative">
                                    <form action="{{ route('subcategories.destroy',$subcategory->id) }}" method="POST">
                                            <a class="btn btn-warning" href="{{ route('subcategories.edit',$subcategory->id) }}"> Edit</a>
                                            <button class="btn btn-danger" type="submit">Delete</button>                                           
                                            @csrf
                                            @method('DELETE')
                                    </form>
                                </select>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    
                </tbody>
                <!--end::Tbody-->
            </table>
            <!--end::Table-->
        </div>
        <!--end::Table wrapper-->
    </div>
    <!--end::Body-->
</div>
<!--end::API keys-->    
@endsection