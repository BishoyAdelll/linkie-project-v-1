

<form class="content__contacts " wire:submit="save">
    <div class="content__brief">
        <div class="content__brief-title">
            <label class="input-file">
                <input type="file" name="file" id="brief"/>
                <span>send a brief</span>
            </label>
        </div>
        <div class="content__brief-text small">I recommend filling out a brief to assess the cost of the project.
            <label for="brief">Brief</label>
        </div>
    </div>
    <div class="content__form">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <label class="content__form-input">
            <input type="text" name="name" wire:model="name"/>
            <span class="content__form-placeholder">name</span>
            @error('name') <span class="error text-sm text-red-600">{{ $message }}</span> @enderror
        </label>
        <label class="content__form-input">
            <input type="email" name="email" required=""  wire:model="email"/>
            <span class="content__form-placeholder">EMAIL *</span>
            @error('email') <span class="error text-sm text-red-600">{{ $message }}</span> @enderror
        </label>
        <label class="content__form-input">
            <input type="text"  wire:model="content" name="content" required="" />
            <span class="content__form-placeholder">MESSAGE *</span>
            @error('message') <span class="error text-sm text-red-600">{{ $message }}</span> @enderror
        </label>
        <div class="content__form-btn">
            <button class="btn btn--arrow" type="submit">
                <svg>
                    <use xlink:href="{{asset('assets/./svg/sprite.svg#arrow')}}"></use>
                </svg>
            </button>
        </div>
    </div>
</form>
