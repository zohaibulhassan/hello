<div class="gallery">
    <h2>Social Media Gallery</h2>
    <div class="app">
        
        <div class="cardList">
            <button class="cardList__btn btn btn--left">
                <div class="icon">
                    <svg>
                        <use xlink:href="#arrow-left"></use>
                    </svg>
                </div>
            </button>
    
            <div class="cards__wrapper">
                <div class="card current--card">
                    <div class="card__image">
                        <img src="{{ asset('assets/images/1.jpg') }}" alt="" />
                    </div>
                </div>
    
                <div class="card next--card">
                    <div class="card__image">
                        <img src="{{ asset('assets/images/2.jpg') }}" alt="" />
                    </div>
                </div>
    
                <div class="card previous--card">
                    <div class="card__image">
                        <img src="{{ asset('assets/images/3.jpg') }}" alt="" />
                    </div>
                </div>
                
            </div>
    
            <button class="cardList__btn btn btn--right">
                <div class="icon">
                    <svg>
                        <use xlink:href="#arrow-right"></use>
                    </svg>
                </div>
            </button>
        </div>
    
        <div class="infoList">
            <div class="info__wrapper">
                <div class="info current--info">
                    <h1 class="text name"></h1>
                    <h4 class="text location"></h4>
                    <p class="text description"></p>
                </div>
    
                <div class="info next--info">
                    <h1 class="text name"></h1>
                    <h4 class="text location"></h4>
                    <p class="text description"></p>
                </div>
    
                <div class="info previous--info">
                    <h1 class="text name"></h1>
                    <h4 class="text location"></h4>
                    <p class="text description"></p>
                </div>                
            </div>
        </div>
    
    
        <div class="app__bg">
            <div class="app__bg__image current--image">
                <img src="{{ asset('assets/images/1.jpg') }}" alt="" />
            </div>
            <div class="app__bg__image next--image">
                <img src="{{ asset('assets/images/2.jpg') }}" alt="" />
            </div>
            <div class="app__bg__image previous--image">
                <img src="{{ asset('assets/images/3.jpg') }}" alt="" />
            </div>
        </div>
    </div>
    
    <div class="loading__wrapper">
        <div class="loader--text">Loading...</div>
        <div class="loader">
            <span></span>
        </div>
    </div>
    
    
    <svg class="icons" style="display: none;">
        <symbol id="arrow-left" xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'>
            <polyline points='328 112 184 256 328 400'
                            style='fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px' />
        </symbol>
        <symbol id="arrow-right" xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'>
            <polyline points='184 112 328 256 184 400'
                            style='fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px' />
        </symbol>
    </svg>
</div>
