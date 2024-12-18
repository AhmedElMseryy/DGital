<form wire:submit.prevent='submit'>
    @if (session()->has('message'))
        <div class="alert alert-success mt-2">
            {{ session('message') }}
        </div>
    @endif

    <div class="row g-3">
        <!-- NAME -->
        <div class="col-md-6">
            <div class="form-floating">
                <input type="text" class="form-control" id="name" placeholder="Your Name" wire:model='name'>
                <label for="name">Your Name</label>
            </div>
        </div>
        <x-error-message field="name"></x-error-message>

        <!-- EMAIL -->
        <div class="col-md-6">
            <div class="form-floating">
                <input type="email" class="form-control" id="email" placeholder="Your Email" wire:model='email'>
                <label for="email">Your Email</label>
            </div>
        </div>
        <x-error-message field="email"></x-error-message>

        <!-- SUBJECT -->
        <div class="col-12">
            <div class="form-floating">
                <input type="text" class="form-control" id="subject" placeholder="Subject" wire:model='subject'>
                <label for="subject">Subject</label>
            </div>
        </div>
        <x-error-message field="subject"></x-error-message>

        <!-- MESSAGE -->
        <div class="col-12">
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 150px"
                    wire:model='message'></textarea>
                <label for="message">Message</label>
            </div>
        </div>
        <x-error-message field="message"></x-error-message>

        <!-- SUBMIT -->
        <div class="col-12">
            <button class="btn btn-primary w-100 py-3" type="submit">
                <x-loading-state name="Send Message"></x-loading-state>
            </button>
        </div>
    </div>
</form>
