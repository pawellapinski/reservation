<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enjoythetrip\Interfaces\FrontendRepositoryInterface; /* Lecture 12 Lecture 13 FrontendRepositoryInterface  */

class FrontendController extends Controller
{
    /* Lecture 12 */
    public function __construct(FrontendRepositoryInterface $frontendRepository) /* Lecture 13 FrontendRepositoryInterface */
    {
        $this->fR = $frontendRepository;
    }
    
    
    /* Lecture 6 */
    public function index()
    {
        $objects = $this->fR->getObjectsForMainPage(); /* Lecture 12 */
        //dd($objects);  /* Lecture 12 */
        return view('frontend.index',['objects'=>$objects]); /* Lecture 12 second argument */
    }
    
    /* Lecture 6 */
    public function article()
    {
        return view('frontend.article');
    }
    
    /* Lecture 6 */
    public function object()
    {
        return view('frontend.object');
    }
    
    /* Lecture 6 */
    public function person()
    {
        return view('frontend.person');
    }
    
    /* Lecture 6 */
    public function room()
    {
        return view('frontend.room');
    }
    
    /* Lecture 6 */
    public function roomsearch()
    {
        return view('frontend.roomsearch');
    }
    
    
}

