import Model from '../core/models/Model';
import Validator from '../app/Validator/Validator';
import WalkThrough from '../app/WalkThrough/WalkThrough';

class Musician extends Model {

    constructor(data = {}) {
        super(data);

        this.fields = {
            name: {
                type: 'text',
                translation: 'Naam ',
                validation: new Validator({
                    required: true,
                }),
                walkThrough: this.nameWalkThrough(),
            },

            function: {
                type: 'text',
                translation: 'Functie ',
                validation: new Validator({
                    required: true,
                }),
                walkThrough: this.functionWalkThrough(),
            },

            description: {
                type: 'textarea',
                translation:  'Korte beschrijving van de muzikant.',
                validation: new Validator({
                    required: true,
                }),
                walkThrough: this.descriptionWalkThrough(),
            },

            photo: { 
				type: 'photo', 
				translation: 'Kies een foto', 
				dimensions: {"1x1": 'portrait'},
				validation: new Validator({
					required: true,
				}),
			},

        };

    }

    
    descriptionWalkThrough() {
        return new WalkThrough([
            'Een beschrijving bij de muzikant geeft de gebruiker een betere ervaring op je website. ',
            'Zorg ervoor dat de beschrijving beknopt blijft. Het is van belang dat de informatie ' + 
            'in deze beschrijving nuttig is voor de lezer. Google zal de website beter indexeren, wanneer de content beknopt en nuttig is. '
        ]);
    }

    functionWalkThrough() {
        return new WalkThrough([
            'Plaats hier de functie van de muzikant. Gelieve de functienaam te beperken tot een of enkele woorden.',
        ]);
    }

    nameWalkThrough() {
        return new WalkThrough([
            'Voer hier de naam in van de betreffende muzikant.',
        ]);
    }

}

export default Musician;