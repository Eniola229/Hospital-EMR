<?php

namespace App\Http\Controllers\Hospital;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;  

class ShowController extends Controller
{
    //
 
       public function search(Request $request)
        {
            $output = "";
            $doctors = User::where('role', 3)
                            ->where(function ($query) use ($request) {
                                $query->where('specialization', 'Like', '%' . $request->search . '%')
                                      ->orWhere('location', 'Like', '%' . $request->search . '%');
                            })
                            ->get();
            
            if ($doctors->count() > 0) {
                $output .= '
                <div class="container section-title" data-aos="fade-up">
                    <h2>Your Search Result</h2>
                </div><!-- End Section Title -->
                <div class="container">
                    <div class="row gy-4">
                ';
                
                foreach ($doctors as $doctor) {
                    $output .= '
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="team-member d-flex align-items-start">
                            <div class="pic">
                                <img style="height: 20vh" src="' . asset('storage/' . $doctor->avatar) . '" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>' . $doctor->first_name . ' ' . $doctor->last_name . '</h4>
                                <span>' . $doctor->specialization . '</span>
                                <span>' . $doctor->location . '</span>
                                <p>' . $doctor->intro . '</p>
                                <div class="social">
                                    <a style="display: inline-block; width: auto;" href="' . url('seedoctor', $doctor->id) . '">
                                        <button class="btn btn-primary">Make An Appointment</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    ';
                }
                
                $output .= '</div></div>';
            } else {
                $output .= '<div class="container section-title" data-aos="fade-up">
                    <h2>No Results Found</h2>
                </div><!-- End Section Title -->';
            }

            return response($output);
        }


} 