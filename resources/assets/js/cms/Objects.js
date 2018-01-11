
        /*
        |--------------------------------------------------------------------------
        | Import
        |--------------------------------------------------------------------------
        |
        | Import your models here
        | 
        | 
        |
        */
        
        import Ticket from './models/ticket';
        import Musician from './models/musician';
        import Project from './models/project';
        
    
        /*
        |--------------------------------------------------------------------------
        | Insert
        |--------------------------------------------------------------------------
        |
        | Insert your models in the models object below.
        | 
        | 
        |
        */
    
        window.models = {
            ticket: Ticket,
            musician: Musician,
            project: Project,
        };
            
        