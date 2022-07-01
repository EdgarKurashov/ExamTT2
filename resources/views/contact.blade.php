<x-layout>
<div class="contact">
    <div class="map">
      <div class="gmap_canvas">
        <iframe width="500" height="500" id="gmap_canvas"
          src="https://maps.google.com/maps?ll=56.95080979999999,24.1163132&q=University of Latvia&t=&z=15&ie=UTF8&iwloc=&output=embed">

        </iframe>
      </div>



      <div class="Form">
      @csrf

        <form method='post' action='/contact/check' class="contactForm" id=form>
          <label for="NorN">{{ __('Your name:') }}</label>
          <input type="text" id="NorN" name="NorN" placeholder="Name or Nickname">
          <br>
          <label for="Email:">{{ __('Your email adress:') }}</label>
          <input type="ContEmail" id="ContEmail" name="ContEmail" placeholder="Example@example.com" required value="{{ old('email') }}">
          @error('ContEmail')
                    <p>{{ $message }}</p>
                    @enderror
          <br>
          <label for="Problem">{{ __('Theme') }}</label>
          <select id="Problem" name="Problem" onchange="checkvalue(this.value)">
            <option value="Problem">{{ __('Review') }}</option>
            <option value="Problem">{{ __('Site work') }}</option>
            <option value="Problem">{{ __('Other') }}</option>
          </select>
          <br>
          <label for="Problem">{{ __('Some comment') }}</label>
          <br>
          <textarea id="message" name="message" placeholder="Your text..."></textarea>
          <br>
        <button type='submit'>{{ __('Submit') }}</button>
        </form>

      </div>


    </div>
  </div>
</x-layout>
