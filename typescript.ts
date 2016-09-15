class GetAddress {

    constructor(public streetNumber, public StreetName, public suburb, public city, public country) {}

      fullAddress(){
        return this.streetNumber + " " + this.StreetName + ", " + this.suburb + ", " + this.city + ", " + this.country;
      }
};
