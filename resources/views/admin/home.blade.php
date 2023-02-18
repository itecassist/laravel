<x-guest-layout>
    <div class="container py-3 px-3">
        <div class="row">
            <div class="col"><h5 class="mb-3">{{ __('global.please_select_a_company') }}</h5></div>
            <div class="col">
                @can('companies_create')
                    <a href="#"><x-icons.plus/></a>
                @endcan
            </div>
        </div>
        <form method="POST" action="">
            @csrf
            <div class="list-group">
                @foreach ($companies->companies as $company)
                    <div class="list-group-item">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="company" id="comp{{ $company->id }}"
                                value="{{ $company->id }}">
                            <label class="form-check-label" for="comp{{ $company->id }}">
                                {{ $company->trading_name }}
                            </label>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="mt-3 text-end">
                <button type="submit" class="btn btn-outline-success btn-sm">Select</button>
            </div>

        </form>
    </div>

</x-guest-layout>
