package softuniBabies.bindingModel;

import softuniBabies.entity.Baby;

public class BabyBindingModel {
    private Integer id;

    private String name;

    private String gender;

    private String birthday;

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public String getGender() {
        return gender;
    }

    public void setGender(String gender) {
        this.gender = gender;
    }

    public String getBirthday() {
        return birthday;
    }

    public void setBirthday(String birthday) {
        this.birthday = birthday;
    }


    public BabyBindingModel(String name, String gender, String birthday) {
        this.name = name;
        this.gender = gender;
        this.birthday = birthday;
    }

    public BabyBindingModel() {
    }


}
