{{-- List Widget 1 --}}

<div class="card card-custom {{ @$class }}">
    {{-- Header --}}
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label font-weight-bolder text-dark">Event Overview</span>
            <span class="text-muted mt-3 font-weight-bold font-size-sm">Upcoming Events</span>
        </h3>
    </div>

    {{-- Body --}}
    <div class="card-body pt-8">
        {{-- Item --}}
        <div class="d-flex align-items-center mb-10">
            {{-- Symbol --}}
            <div class="symbol symbol-40 symbol-light-primary mr-5">
                <span class="symbol-label">
                    {{ Metronic::getSVG("media/svg/icons/Home/Library.svg", "svg-icon-lg svg-icon-primary") }}
                </span>
            </div>

            {{-- Text --}}
            <div class="d-flex flex-column font-weight-bold">
                <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Sport Fest</a>
                <span class="text-muted">Sept. 15, 2021</span>
            </div>
        </div>

        {{-- Item --}}
        <div class="d-flex align-items-center mb-10">
            {{-- Symbol --}}
            <div class="symbol symbol-40 symbol-light-warning mr-5">
                <span class="symbol-label">
                    {{ Metronic::getSVG("media/svg/icons/Communication/Write.svg", "svg-icon-lg svg-icon-warning") }}
                </span>
            </div>

            {{-- Text --}}
            <div class="d-flex flex-column font-weight-bold">
                <a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg">CCS Days</a>
                <span class="text-muted">August. 25, 2021</span>
            </div>
        </div>

        {{-- Item --}}
        <div class="d-flex align-items-center mb-10">
            {{-- Symbol --}}
            <div class="symbol symbol-40 symbol-light-success mr-5">
                <span class="symbol-label">
                    {{ Metronic::getSVG("media/svg/icons/Communication/Group-chat.svg", "svg-icon-lg svg-icon-success") }}
                </span>
            </div>

            {{-- Text --}}
            <div class="d-flex flex-column font-weight-bold">
                <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Programming Battle</a>
                <span class="text-muted">Dec. 02, 2021</span>
            </div>
        </div>

        {{-- Item --}}
        <div class="d-flex align-items-center mb-10">
            {{-- Symbol --}}
            <div class="symbol symbol-40 symbol-light-danger mr-5">
                <span class="symbol-label">
                    {{ Metronic::getSVG("media/svg/icons/General/Attachment2.svg", "svg-icon-lg svg-icon-danger") }}
                </span>
            </div>

            {{-- Text --}}
            <div class="d-flex flex-column font-weight-bold">
                <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Hackaton</a>
                <span class="text-muted">Jan. 20, 2022</span>
            </div>
        </div>

        {{-- Item --}}
        <div class="d-flex align-items-center mb-2">
            {{-- Symbol --}}
            <div class="symbol symbol-40 symbol-light-info mr-5">
                <span class="symbol-label">
                    {{ Metronic::getSVG("media/svg/icons/Communication/Shield-user.svg", "svg-icon-lg  svg-icon-info") }}
                </span>
            </div>

            {{-- Text --}}
            <div class="d-flex flex-column font-weight-bold">
                <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Acquaintance Party</a>
                <span class="text-muted">Mar. 03, 2022</span>
            </div>
        </div>
    </div>
</div>
