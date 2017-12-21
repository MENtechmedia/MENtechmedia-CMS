import Model from '../core/models/Model';
import Validator from '../app/Validator/Validator';
import WalkThrough from '../app/WalkThrough/WalkThrough';

class Ticket extends Model {

    constructor(data = {}) {
        super(data);

        this.fields = {
            title: {
                type : 'text',
                translation: 'Locatie',
                validation: new Validator({
                    required: true
                }),
            },

            date: {
                type: 'date',
                translation: 'Datum uitvoering',
                description: 'Datum',
                validation: new Validator({
                    required: true
                }),
            },

            link: {
                type: 'website',
                translation: 'Link naar ticketverkoop',
                description: 'Link',
                validation: new Validator({
                    required: true
                }),
            }


        };

    }


}

export default Ticket;
