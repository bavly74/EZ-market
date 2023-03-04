
          <div id="box">
              @if (session()->has('message'))
                  <div class="alert alert-success alertD ">
            <span>
                <i class="fa-solid fa-circle-check"></i>
            </span>
                      {{ session('message') }}

                  </div>
              @endif
          </div>
