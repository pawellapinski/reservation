<?php



namespace App\Enjoythetrip\Repositories; /* Lecture 12 */

use App\TouristObject; /* Lecture 12 */
use App\Enjoythetrip\Interfaces\FrontendRepositoryInterface;  /* Lecture 13 */

/* Lecture 12 */
class FrontendRepository implements FrontendRepositoryInterface  {   /* Lecture 13 implements FrontendRepositoryInterface */
    
    /* Lecture 12 */
    public function getObjectsForMainPage()
    {
        return TouristObject::all();
    } 
  
}
