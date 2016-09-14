class FullAddress {
    fullAddress: string;
    constructor(public streetNumber, public StreetName, public suburb, public city, public country) {
        this.fullAddress = streetNumber + " " + StreetName + ", " + suburb + ", " + city + ", " + country;
    }
}

interface AddressComponents {
    streetNumber: string;
    StreetName: string;
    suburb: string;
    city: string;
    country: string;
}

function getFullAddress(address : AddressComponents) {
    return  address.streetNumber + " " + address.StreetName + ", " + address.suburb + ", " + address.city + ", " + address.country;
}




