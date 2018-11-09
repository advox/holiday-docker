.DEFAULT_GOAL := help
.RECIPEPREFIX +=

build:
    rm -rf symfony
    git clone https://github.com/advox/holiday.git symfony
    cd symfony && composer install