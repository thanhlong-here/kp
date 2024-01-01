@props(['name','accept'])
<label {{ $attributes }} >
  <i class="icon-paper-clip"></i>
  <span> {{ __('File đính kèm') }} </span>

  <input type="file" {{ $name ?? '' }} {{ empty($accept) ? '': "accept='$accept'" }} class="none"  />
</label>
