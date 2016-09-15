class GetAddress {

    constructor(public streetNumber, public StreetName, public suburb, public city, public country) {

    }

      fullAddress(){
        return "The address is : " + this.streetNumber + " " + this.StreetName + ", " + this.suburb + ", " + this.city + ", " + this.country;
      }
};
