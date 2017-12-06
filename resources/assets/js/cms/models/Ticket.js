import Model from '../core/models/Model';
import Validator from '../app/Validator/Validator';
import WalkThrough from '../app/WalkThrough/WalkThrough';

class Ticket extends Model {

    constructor(data = {}) {
        super(data);

        this.fields = {
            title: {
                type: 'text',
                translation: 'Locatienaam ',
                validation: new Validator({
                    required: true,
                }),
                walkThrough: this.titleWalkThrough(),
            },

            date: {
                type: 'date',
                translation: 'Datum',
                validation: new Validator({
                    required: true,
                }),
                walkThrough: this.dateWalkThrough()
            },

            link: {
                type: 'website',
                translation: 'Link naar ticketverkoop',
                validation: new Validator({
                    required: true,
                }),
                walkThrough: this.linkWalkThrough(),
            },

            description: {
                type: 'textarea',
                translation:  'Korte beschrijving van de uitvoering.',
                validation: new Validator({
                    required: true,
                }),
                walkThrough: this.descriptionWalkThrough(),
            }

        };

    }

    dateWalkThrough() {
        return new WalkThrough([
            'De datum waarop de uitvoering plaatsvindt.',
        ]);
    }

    linkWalkThrough() {
        return new WalkThrough([
            'Plaats hier de link naar de website van de ticketverkoper. Een link die direct naar het ticket leidt is gewenst.',
        ]);
    }

    titleWalkThrough() {
        return new WalkThrough([
            'De locatienaam is de naam van het gebouw waar de uitvoering plaatsvindt.',
        ]);
    }

    descriptionWalkThrough() {
        return new WalkThrough([
            'Een beschrijving bij de tickets geeft de gebruiker een betere ervaring op je website. ',
            'Zorg ervoor dat de beschrijving beknopt blijft. Het is van belang dat de informatie ' + 
            'in deze beschrijving nuttig is voor de lezer. Google zal de website beter indexeren, wanneer de content beknopt en nuttig is. '
        ]);
    }


}

export default Ticket;
