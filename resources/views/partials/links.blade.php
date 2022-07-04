{{-- button navigation --}}
<button id="dots" class="btn btn-transparent" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
    <img src="{{asset('img/suspension.png')}}" alt="suspension" width="70px"> 
</button>
    <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasScrollingLabel">I made websites for new compagnies and 
            independants who trusted me to create the minimal design, inspired by what they wanted.
          </h5>
          <button type="button" class="btn-close bg-secondary rounded-circle text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <a href="http://kamagroupltd.com" target="_blank" class="link">
                Kama Group LTD
                <div class="under"></div>
            </a>
            <a href="http://kamagroupltd.com" target="_blank">
                <img src="{{asset('img/kamagroup.jpg')}}" alt="kamagroup" width="200px" class="apercu my-3">
            </a>
            
        </div>
    </div>