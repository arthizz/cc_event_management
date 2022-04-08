<div class="modal fade" tabindex="-1" id="add-event-overlay">
    <div class="modal-dialog">
        <form data-action="/administrator/backend-ajax/submit-event" id="new-event-form">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Event</h5>
    
                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                        <span class="svg-icon svg-icon-2x"></span>
                    </div>
                    <!--end::Close-->
                </div>
    
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="mb-3 col-md-12">
                                <label class="form-label">Event Title</label>
                                <input type="text" class="form-control" placeholder="Event Title" name="event-title">
                            </div>
                            <div class="mb-3 col-md-12">
                                <label class="form-label">Event Fee</label>
                                <input type="number" class="form-control" name="event-fee" min="0.01" step="0.01" placeholder="0.00">
                            </div>
                            <div class="mb-3 col-md-12">
                                <label class="form-label">Event Venue</label>
                                <input type="text" class="form-control" placeholder="Event Venue" name="event-venue">
                            </div>
                            <div class="mb-3 col-md-12">
                                <label class="form-label">Event Date</label>
                                <input type="date" class="form-control" name="event-date">
                            </div>
                            {{-- <div class="mb-3 col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="form-label">Event Start Time</label>
                                        <input type="time" class="form-control" name="event-start-time">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Event End Time</label>
                                        <input type="time" class="form-control" name="event-end-time">
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="btn-add-event">Add Event</button>
                </div>
            </div>
        </form>
    </div>
</div>