@if($enabled)
<style @if($withCsp) @cspNonce @endif>.hidden_block_honeypot {display: none !important;}</style>
    <div id="{{ $nameFieldName }}_wrap" class="hidden_block_honeypot" >
        
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
