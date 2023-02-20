<x-guest-layout>
    <div class="container-sm py-3 px-3">
        <form method="POST" action="">
            @csrf
        <div class="card">
            <div class="card-header"><h5 class="mb-3">{{ __('global.please_select_a_company') }}</h5></div>
            <div class="card-body"><x-select id="company" name="company" required>
                <option value="">{{ __('global.pleaseSelect') }}</option>
                @foreach ($companies->companies as $company)
                <option value="{{ $company->id }}">{{ $company->trading_name }}</option>
            @endforeach
            </x-select></div>
            <div class="card-footer"><button type="submit" class="btn btn-outline-success btn-sm">Select</button></div>
        </div>
        

        </form>
    </div>

</x-guest-layout>
