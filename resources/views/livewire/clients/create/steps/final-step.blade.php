<div class="row py-4 mb-3">
    <div class="col-sm-8">
        <p class="slate">Creating New client</p>
        <p class="slate-light">Review and save the client</p>
        <form wire:submit.prevent='submit'>
            <div class="m-3 row g-3">
                <table class="table table-bordered">
                    <tr>
                        <th colspan='2'>Personal info</th>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td>{{$state['name']}}</td>
                    </tr>
                    <tr>
                        <td>Date of birth</td>
                        <td>{{$state['dob']}}</td>
                    </tr>
                    <tr>
                        <td>Contact</td>
                        <td>{{$state['contact']}}</td>
                    </tr>
                    <tr>
                        <td>Nin number</td>
                        <td>{{$state['nin']}}</td>
                    </tr>
                    <tr>
                        <td>Occupation</td>
                        <td>{{$state['occupation']}}</td>
                    </tr>
                    <tr>
                        <td>Residence</td>
                        <td>{{$state['residence']}}</td>
                    </tr>
                    <tr>
                        <td>Stage name</td>
                        <td>{{$state['stage']}}</td>
                    </tr>
                    <tr>
                        <td>Date of agreement</td>
                        <td>{{$state['doa']}}</td>
                    </tr>
                    <tr>
                        <td>Father's name</td>
                        <td>{{$state['father']}}</td>
                    </tr>
                    <tr>
                        <td>Father's contact</td>
                        <td>{{$state['father_contact']}}</td>
                    </tr>
                    <tr>
                        <td>Mother's name</td>
                        <td>{{$state['mother']}}</td>
                    </tr>
                    <tr>
                        <td>Mother's contact</td>
                        <td>{{$state['mother_contact']}}</td>
                    </tr>
                    <tr>
                        <th colspan='2'>Motor info</th>
                    </tr>
                    <tr>
                        <td>Vehicle type</td>
                        <td>{{$state['type']}}</td>
                    </tr>
                    <tr>
                        <td>Vehicle make</td>
                        <td>{{$state['make']}}</td>
                    </tr>
                    <tr>
                        <td>Registration number</td>
                        <td>{{$state['registration']}}</td>
                    </tr>
                    <tr>
                        <td>Color</td>
                        <td>{{$state['color']}}</td>
                    </tr>
                    <tr>
                        <td>Chasis number</td>
                        <td>{{$state['chasis']}}</td>
                    </tr>
                    <tr>
                        <td>Engine number</td>
                        <td>{{$state['engine']}}</td>
                    </tr>
                    <tr>
                        <td>Condition</td>
                        <td>{{$state['condition']}}</td>
                    </tr>
                    <tr>
                        <td>Registered names</td>
                        <td>{{$state['registered_names']}}</td>
                    </tr>
                    <tr>
                        <th colspan='2'>Loan payment info</th>
                    </tr>
                    <tr>
                        <td>Initial deposit</td>
                        <td>{{$state['initial_deposit']}}</td>
                    </tr>
                    <tr>
                        <td>Weekly deposit</td>
                        <td>{{$state['weekly_deposit']}}</td>
                    </tr>
                    <tr>
                        <td>Agreed months</td>
                        <td>{{$state['agreed_months']}}</td>
                    </tr>
                    <tr>
                        <td>Total weeks</td>
                        <td>{{$state['total_weeks']}}</td>
                    </tr>
                    <tr>
                        <td>Selling price</td>
                        <td>{{$state['selling_price']}}</td>
                    </tr>
                    <tr>
                        <td>Starting week date</td>
                        <td>{{$state['starting_week']}}</td>
                    </tr>
                    <tr>
                        <td>Place of agreement</td>
                        <td>{{$state['agreement_place']}}</td>
                    </tr>
                    <tr>
                        <th colspan='2'>Referee info</th>
                    </tr>
                    <tr>
                        <td>Referee 1 name</td>
                        <td>{{$state['referee1_name']}}</td>
                    </tr>
                    <tr>
                        <td>Referee 1 relationship</td>
                        <td>{{$state['referee1_relationship']}}</td>
                    </tr>
                    <tr>
                        <td>Referee 1 contact</td>
                        <td>{{$state['referee1_contact']}}</td>
                    </tr>
                    <tr>
                        <td>Referee 2 name</td>
                        <td>{{$state['referee2_name']}}</td>
                    </tr>
                    <tr>
                        <td>Referee 2 relationship</td>
                        <td>{{$state['referee2_relationship']}}</td>
                    </tr>
                    <tr>
                        <td>Referee 2 contact</td>
                        <td>{{$state['referee2_contact']}}</td>
                    </tr>
                    <tr>
                        <td>Stage chairperson name</td>
                        <td>{{$state['st_chair_name']}}</td>
                    </tr>
                    <tr>
                        <td>Stage chairperson contact</td>
                        <td>{{$state['st_chair_contact']}}</td>
                    </tr>
                    <tr>
                        <td>Local council(LC) name</td>
                        <td>{{$state['lc_chair_name']}}</td>
                    </tr>
                    <tr>
                        <td>Local council(LC) contact</td>
                        <td>{{$state['lc_chair_contact']}}</td>
                    </tr>
                </table>
            </div>
            <div class="d-flex justify-content-between">
                <div class="mb-3">
                    <button wire:click="previousStep" class="btn btn-light small" type="button">Previous</button>
                </div>
                <div class="mb-3">
                    <button class="btn btn-light small" type="submit">
                        <span wire:loading.delay.long>
                            Loading ...
                        </span>
                        <span wire:loading.remove.delay.long>
                            Save client
                        </span>
                    </button>
                </div>
            </div>
        </form>
    </div>
    <div class="col-sm-4">
        ...
    </div>
</div>
