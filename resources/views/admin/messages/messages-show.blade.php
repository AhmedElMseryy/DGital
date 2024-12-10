<x-show-modal title="Show Message">
    <!-- NAME -->
    <div class="col-md-6 mb-0">
        <label class="form-label">Name</label>
        <div class="form-control">{{ $name }}</div>
    </div>
    <!-- EMAIL -->
    <div class="col-md-6 mb-0 mt-2">
        <label class="form-label">Email</label>
        <div class="form-control">{{ $email }}</div>
    </div>
    <!-- SUBJECT -->
    <div class="col-md-12 mb-0 mt-2">
        <label class="form-label">Subject</label>
        <div class="form-control">{{ $subject }}</div>
    </div>
    <!-- MESSAGE -->
    <div class="col-md-12 mb-0 mt-2">
        <label class="form-label">Message</label>
        <div class="form-control">{{ $message }}</div>
    </div>
</x-show-modal>
