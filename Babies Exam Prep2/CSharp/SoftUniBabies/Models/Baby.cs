namespace SoftUniBabies.Models
{
    using System;
    using System.ComponentModel.DataAnnotations;

    public class Baby
    {
        [Key]
        public int Id { get; set; }

        public Baby(string name, string gender, DateTime birthday)
        {
            Name = name;
            Gender = gender;
            Birthday = birthday;
        }

        public Baby()
        {

        }

        [Required]
        public string Name { get; set; }

        [Required]
        public string Gender { get; set; }

        [Required]
        public DateTime Birthday{ get; set; }



    }
}
