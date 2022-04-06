@extends('layouts.master')
@section('title', 'Candidate Dossier List')
@section('dashboard')

    <!-- partial -->
    <!-- partial:partials/_sidebar.html -->

    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-sm-12">
                <div class="col-sm-5 ml-2 mb-4">
                        <ol class="breadcrumb float-sm-right" style="background-color: #6b8ed6;border-radius: 5px;margin-left: 52px;">
                            <li class="breadcrumb-item"><a  style="color:#fff; text-decoration: none;" href="{{ route('home') }}" aria-expanded="false" aria-controls="ui-basic"><i class="fa-solid fa-house"></i></a></li>
                                <li class="breadcrumb-item" ><a  style="color:#fff; text-decoration: none;"data-bs-toggle="collapse" href="#ui-basic26" aria-expanded="false" aria-controls="ui-basic26">Candidate Dossier</a></li>
                                <li class="breadcrumb-item active" ><a  style="color:#fff; text-decoration: none;" href="{{ route('candidate_dossier_list')}}" ><b>Individual Candidate Dossier List</b></a>
                            </li>
                        </ol>
                    </div>
                    <div class="home-tab">

                        <div class="container col-sm-12 mx-auto">
                            <h3 class="text-center fw-bold">SF 5.1G1: Index of individual Candidate Dossier</h3><br>
                            <div class="container col-sm-12 mx-auto" >
                                <h5>Name of Candidate: <u><pre style="display:inline;font-size:18px;">   {{ $cand_data->name }}      </pre></u></h5>
                                <table class="table table-bordered" id="">
                                    <thead>
                                        <tr>
                                            <th>S.No.</th>
                                            <th>Particulars</th>
                                            <th>Status (Yes/ No/ Not Applicable)</th>
                                            <th>Type of proof submitted</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Admission form</td>
                                                <td class="text-center"> {{ $cand_data->enroll=="yes" ? "Yes" : "No" }} </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Photo Id proof</td>
                                                <td class="text-center">{{ !empty($id_proof->getDocNameSecond->doc2_type_name) ? "Yes" : "No" }}</td>
                                                <td>{{ !empty($id_proof->getDocNameSecond->doc2_type_name) ? $id_proof->getDocNameSecond->doc2_type_name : "" }}</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Age proof</td>
                                                <td class="text-center">{{ !empty($age_proof->getDocNameSecond->doc2_type_name) ? "Yes" : "No" }}</td>
                                                <td>{{ !empty($age_proof->getDocNameSecond->doc2_type_name) ? $age_proof->getDocNameSecond->doc2_type_name : "" }}</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Domicile proof</td>
                                                <td class="text-center">{{ !empty($domicile_proof->getDocNameSecond->doc2_type_name) ? "Yes" : "No" }}</td>
                                                <td>{{ !empty($domicile_proof->getDocNameSecond->doc2_type_name) ? $domicile_proof->getDocNameSecond->doc2_type_name : "" }}</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Proof that candidate is poor</td>
                                                <td class="text-center">{{ !empty($poor_proof->getDocNameSecond->doc2_type_name) ? "Yes" : "No" }}</td>
                                                <td>{{ !empty($poor_proof->getDocNameSecond->doc2_type_name) ? $poor_proof->getDocNameSecond->doc2_type_name : "" }}</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Category certificate (SC/ ST/ Minority/ PWD)</td>
                                                <td class="text-center">{{ !empty($category_proof->getDocNameSecond->doc2_type_name) ? "Yes" : "No" }}</td>
                                                <td>{{ !empty($category_proof->getDocNameSecond->doc2_type_name) ? $category_proof->getDocNameSecond->doc2_type_name : "" }}</td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>Aptitude test</td>
                                                <td class="text-center">No</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>Parent consent form (SF-5.1E1)</td>
                                                <td class="text-center"> {{ $parent_consent>0 ? "Yes" : "No" }} </td>
                                                <td> {{ $parent_consent>0 ? "Attachment" : "" }} </td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>Bank account number proof</td>
                                                <td class="text-center">No</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>Assessment answer sheets (core domain, non-domain)</td>
                                                <td class="text-center">No</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>11</td>
                                                <td>Candidate feedback form (SF-5.1E3)</td>
                                                <td class="text-center">No</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>12</td>
                                                <td>OJT letter with stipend amount from employer SF- 4.6B</td>
                                                <td class="text-center">No</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>13</td>
                                                <td>OJT completion certificate SF- 4.6C</td>
                                                <td class="text-center">No</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>14</td>
                                                <td>Placement proof for Month 1</td>
                                                <td class="text-center">No</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>15</td>
                                                <td>Placement proof for Month 2</td>
                                                <td class="text-center">No</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>16</td>
                                                <td>Placement proof for Month 3</td>
                                                <td class="text-center">No</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>17</td>
                                                <td>Training completion certificate (SF-5.1E4)</td>
                                                <td class="text-center">No</td>
                                                <td></td>
                                            </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        

    {{-- </div> --}}
@endsection
