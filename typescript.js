var GetAddress = (function () {
    function GetAddress(streetNumber, StreetName, suburb, city, country) {
        this.streetNumber = streetNumber;
        this.StreetName = StreetName;
        this.suburb = suburb;
        this.city = city;
        this.country = country;
    }
    GetAddress.prototype.fullAddress = function () {
        return  this.streetNumber + " " + this.StreetName + ", " + this.suburb + ", " + this.city + ", " + this.country;
    };
    return GetAddress;
}());
;
