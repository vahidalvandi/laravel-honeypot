@if($enabled)
    @if($withCsp)
        <style @cspNonce>
            .hidden_honypot {
                display: none !important;
            }
        </style>
    @endif

    <div id="{{ $nameFieldName }}_wrap" 
         class="hidden_honypot" 
         @if(!$withCsp) style="display: none;" aria-hidden="true" @endif>
        
        <input id="{{ $nameFieldName }}"
               name="{{ $nameFieldName }}"
               type="hidden"
               value=""
               @if ($livewireModel ?? false) wire:model.defer="{{ $livewireModel }}.{{ $unrandomizedNameFieldName }}" @endif
               autocomplete="nope"
               tabindex="-1">

        <input name="{{ $validFromFieldName }}"
               type="hidden"
               value="{{ $encryptedValidFrom }}"
               @if ($livewireModel ?? false) wire:model.defer="{{ $livewireModel }}.{{ $validFromFieldName }}" @endif
               autocomplete="off"
               tabindex="-1">
    </div>
@endif
