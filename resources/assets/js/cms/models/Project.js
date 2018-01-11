import Model from '../core/models/Model';
import Validator from '../app/Validator/Validator';
import WalkThrough from '../app/WalkThrough/WalkThrough';

class Project extends Model {

    constructor(data = {}) {
        super(data);

        this.fields = {
            title: {
                type: 'text',
                translation: 'Titel van project ',
                validation: new Validator({
                    required: true,
                }),
                walkThrough: this.titleWalkThrough(),
            },

            description: {
                type: 'textarea',
                translation:  'Korte beschrijving van het huidige project.',
                validation: new Validator({
                    required: true,
                }),
                walkThrough: this.descriptionWalkThrough(),
            },
        };
    }

    titleWalkThrough() {
        return new WalkThrough([
            'De titel van het project is de naam van de uitvoering.',
        ]);
    }

    descriptionWalkThrough() {
        return new WalkThrough([
            'Een beschrijving bij het project geeft de gebruiker een betere ervaring op je website. ',
            'Zorg ervoor dat de beschrijving beknopt blijft. Het is van belang dat de informatie ' + 
            'in deze beschrijving nuttig is voor de lezer. Google zal de website beter indexeren, wanneer de content beknopt en nuttig is. '
        ]);
    }


}

export default Project;
