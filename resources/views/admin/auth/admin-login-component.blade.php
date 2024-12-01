<form class="mb-3" wire:submit.prevent='submit'>
    <!-- EMAIL -->
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control" placeholder="Enter your email" autofocus wire:model.live='email' />
        <div>
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <!-- PASSWORD -->
    <div class="mb-3 form-password-toggle">
        <div class="d-flex justify-content-between">
            <label class="form-label" for="password">Password</label>
        </div>
        <div class="input-group input-group-merge">
            <input type="password" class="form-control"
                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                aria-describedby="password" wire:model='password' />
            <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
        </div>
        <div>
            @error('password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <!-- REMEMBER ME -->
    <div class="mb-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" wire:model='remember' />
            <label class="form-check-label" for="remember-me"> Remember Me </label>
        </div>
    </div>

    <!-- SUBMIT BUTTON -->
    <div class="mb-3">
        <button class="btn btn-primary d-grid w-100" type="submit">
            <span wire:loading.remove>
                Sign in
            </span>
            <!-- Loading... -->
            <div class="text-center" wire:loading wire:target='submit'>
                <span class="spinner-border spinner-border-sm text-white" role="status">
                    <span class="visually-hidden">Loading...</span>
                </span>
            </div>
        </button>
    </div>
</form>
