<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#adduser">
    Add User
</button>

  <!-- Modal -->
  <div class="modal fade" id="adduser" tabindex="-1" aria-labelledby="adduserLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="adduserLabel">Add User</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form method="POST" action="/Admin/User/List/Adduser">
                @csrf
                <div class="mb-3 filled form-group tooltip-end-top">
                    <i data-acorn-icon="user">{{ __('Name') }}</i>
                    <input class="form-control @error('name') is-invalid @enderror" placeholder="Name" name="name" value="{{ old('name') }}" id="name" autocomplete="off"/>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3 filled form-group tooltip-end-top">
                    <label for="" class="form-group col-5" style="color:black">Duty:</label>
                    <input type="radio" class="btn-check" id="salebtn" name="duty" value="sale" />
                    <label class="btn btn-outline-primary" for="salebtn">Sale</label>
                    <input type="radio" class="btn-check" id="depobtn" name="duty" value="depo" checked="true"/>
                    <label class="btn btn-outline-success" for="depobtn"> Depo </label>
                </div>

                <div class="mb-3 filled form-group tooltip-end-top">
                    <label for="" class="form-group col-5" style="color:black">Member:</label>
                    <input type="radio" class="btn-check" id="yesbtn" name="member" value="yes" />
                    <label class="btn btn-outline-primary" for="yesbtn">Yes</label>
                    <input type="radio" class="btn-check" id="nobtn" name="member" value="no" checked="true"/>
                    <label class="btn btn-outline-success" for="nobtn"> No </label>
                </div>

                <div class="mb-3 filled form-group tooltip-end-top">
                    <i data-acorn-icon="email">{{ __('Email Address') }}</i>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" id="email" autocomplete="off"/>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3 filled form-group tooltip-end-top" hidden>
                    <label for="" class="form-group col-5" style="color:black">Account Type:</label>
                    <input type="radio" class="btn-check" id="btnRadioPrimaryOutline" name="is_admin" value="1" id="is_admin" />
                    <label class="btn btn-outline-primary" for="btnRadioPrimaryOutline">Admin</label>
                    <input type="radio" class="btn-check" id="btnRadioSecondaryOutline" name="is_admin" value="0" id="is_admin" checked="true"/>
                    <label class="btn btn-outline-success" for="btnRadioSecondaryOutline"> User </label>
                </div>

                <div class="mb-3 filled form-group tooltip-end-top">
                    <i data-acorn-icon="lock-off">{{ __('Password') }}</i>
                    <input class="form-control @error('password') is-invalid @enderror" id="password" type="password" placeholder="Password" name="password" required autocomplete="new-password"/>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3 filled form-group tooltip-end-top">
                    <i data-acorn-icon="lock-off">{{ __('Confirm Password') }}</i>
                    <input class="form-control @error('password_confirmation') is-invalid @enderror" id="password-confirm" type="password" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password"/>
                </div>
                @error('password_confirmation')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <button type="submit" class="btn btn-lg btn-primary" style="float: right">{{ __('Register') }}</button>
            </form>
        </div>

      </div>
    </div>
  </div>
